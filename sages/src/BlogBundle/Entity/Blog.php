<?php

namespace X\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Blog
{
    /** @var string */
    private $name;

    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /** @var AuthorInterface */
    private $author;

    /** @var ArrayCollection */
    private $tags;

    /** @var ArrayCollection */
    private $posts;

    /**
     * @param AuthorInterface $author
     * @param string          $name
     * @param string          $title
     * @param string          $description
     */
    public function __construct(AuthorInterface $author, $name, $title, $description = '')
    {
        $this->author      = $author;
        $this->name        = $name;
        $this->title       = $title;
        $this->description = $description;
        $this->tags        = new ArrayCollection();
        $this->posts       = new ArrayCollection();
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return AuthorInterface
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return ArrayCollection
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param Post $post
     */
    public function addPost(Post $post)
    {
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
        }
    }

    /**
     * @return ArrayCollection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param Tag $tag
     */
    public function addTag(Tag $tag)
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
        }
    }

    /**
     * @param Tag $tag
     */
    public function removeTag(Tag $tag)
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
        }
    }


}