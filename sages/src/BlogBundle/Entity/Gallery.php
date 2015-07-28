<?php

namespace X\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use X\BlogBundle\Entity\Post;
use X\BlogBundle\Entity\AuthorInterface;


/**
 * Class Gallery
 *
 * @author  Michał Rybnik <michal.rybnik@fuero.pl> 
 */
class Gallery extends Post
{
    /** @var ArrayCollection */
    private $images;

    /**
     * @param string             $title
     * @param AuthorInterface    $author
     * @param \DateTimeInterface $postedAt
     */
    public function __construct($title, AuthorInterface $author, \DateTimeInterface $postedAt = null)
    {
        $this->images = new ArrayCollection();

        parent::__construct($title, $author, $postedAt);
    }

    /**
     * @return ArrayCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param Image $image
     */
    public function addImage(Image $image)
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
        }
    }


}