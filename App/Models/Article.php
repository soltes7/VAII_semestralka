<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

class Article extends Model
{
    protected $id;
    protected ?string $title;
    protected ?string $content;
    protected ?string $url;
    protected ?int $times;
    protected $timestamp;
    protected ?string $author;

    /**
     * Article constructor.
     * @param ?string $title
     * @param ?string $content
     * @param ?string $url
     * @param ?int $times
     * @param $timestamp
     * @param ?string $author
     */
    public function __construct(?string $title = null, ?string $content = null, ?string $url = null, ?int $times = null, $timestamp = null, ?string $author = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->url = $url;
        $this->times = $times;
        $this->timestamp = $timestamp;
        $this->author = $author;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param ?string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param ?string $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param ?string $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getTimes(): int
    {
        return $this->times;
    }

    public function incrementTimes(): void
    {
        $this->times = $this->times + 1;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param $timestamp
     */
    public function setTimestamp($timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return string
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param ?string $author
     */
    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    static public function setDbColumns()
    {
        return ['id', 'title', 'content', 'url', 'times', 'timestamp', 'author'];
    }

    static public function setTableName()
    {
        return 'articles';
    }
}