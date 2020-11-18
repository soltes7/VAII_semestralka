<?php
/** @var Array $data */
/** @var \App\Models\Article $article */
$article = $data['article'];
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <a class="btn btn-primary btn-lg" href="?c=home" role="button">Back</a>
                <h1 class="display-4"><?= $article->getTitle() ?></h1>
                <div class="row">
                    <div class="column">
                        <img src="<?= $article->getUrl() ?>" id="titulnaFoto" alt="...">
                    </div>
                </div>
                <hr class="my-4">
                <h5><?= $article->getContent() ?></h5>
                <p class="pataClanku">Autor: <?= $article->getAuthor()?>, posledná úprava: <?= $article->getTimestamp()?>, zobrazené: <?= $article->getTimes() ?>x</p>
            </div>
        </div>
    </div>
</div>