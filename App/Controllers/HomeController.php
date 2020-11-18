<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Article;

class HomeController extends AControllerBase
{

    public function index()
    {
        return [
            'articles' => Article::getAll()
        ];
    }

    public function add()
    {
        if  (isset($_POST['title'])) {
            $article = new Article($_POST['title'], $_POST['content'], $_POST['url'], 0, 0, $_POST['author']);
            date_default_timezone_set("Europe/Bratislava");
            $article->setTimestamp(date("Y-m-d H:i:s"));
            $article->save();
            header("Location: ?c=home");
        }
        return [];
    }

    public function edit() {
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);

        if  (isset($_POST['title'])) {
            $article->setContent($_POST['content']);
            $article->setTitle($_POST['title']);
            $article->setUrl($_POST['url']);
            $article->setAuthor($_POST['author']);
            date_default_timezone_set("Europe/Bratislava");
            $article->setTimestamp(date("Y-m-d H:i:s"));
            $article->save();
            header("Location: ?c=home");
        }

        return [
            'article' => $article
        ];
    }

    public function delete() {
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);
        $article->delete();
        header("Location: ?c=home");
        exit();
    }

    public function expand() {
        $id = $_GET['id'];
        $article = new Article();
        $article->getOne($id);
        $article->incrementTimes();
        $article->save();

        return [
            'article' => $article
        ];
    }
}