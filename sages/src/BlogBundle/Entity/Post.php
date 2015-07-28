<?php

namespace X\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

abstract class Post
{
    /** @var string */
    private $title;

    /** @var DateTime */
    private $postedAt;

    /** @var AuthorInterface */
    private $author;

    /** @var ArrayCollection */
    private $comments;

    /**
     * @param string             $title
     * @param AuthorInterface    $author
     * @param \DateTimeInterface $postedAt
     */
    public function __construct($title, AuthorInterface $author, \DateTimeInterface $postedAt = null)
    {
        $this->title    = $title;
        $this->author   = $author;
        $this->postedAt = $postedAt ? : new \DateTime();
        $this->comments = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPostedAt()
    {
        return $this->postedAt;
    }

    /**
     * @param \DateTimeInterface $postedAt
     */
    public function setPostedAt(\DateTimeInterface $postedAt)
    {
        $this->postedAt = $postedAt;
    }

    /**
     * @return ArrayCollection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param Comment $comment
     */
    public function addComment(Comment $comment)
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
        }
    }
}