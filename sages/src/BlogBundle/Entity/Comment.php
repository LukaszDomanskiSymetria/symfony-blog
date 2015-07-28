<?php

namespace X\BlogBundle\Entity;

class Comment
{
    /** @var string */
    private $content;

    /** @var \DateTimeInterface */
    private $commentedAt;

    /** @var AuthorInterface */
    private $author;

    /**
     * @param string             $content
     * @param AuthorInterface    $author
     * @param \DateTimeInterface $commentedAt
     */
    public function __construct($content, AuthorInterface $author, \DateTimeInterface $commentedAt = null)
    {
        $this->content     = $content;
        $this->author      = $author;
        $this->commentedAt = $commentedAt ? : new \DateTime();
    }

    /**
     * @return AuthorInterface
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCommentedAt()
    {
        return $this->commentedAt;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

}