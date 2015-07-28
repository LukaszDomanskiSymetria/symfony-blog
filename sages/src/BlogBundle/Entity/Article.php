<?php

namespace X\BlogBundle\Entity;

class Article extends Post
{
    /** @var string */
    private $content;

    /**
     * @param string             $content
     * @param AuthorInterface    $title
     * @param AuthorInterface    $author
     * @param \DateTimeInterface $postedAt
     */
    public function __construct($content, $title, AuthorInterface $author, \DateTimeInterface $postedAt = null)
    {
        $this->content = $content;

        parent::__construct($title, $author, $postedAt);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

}