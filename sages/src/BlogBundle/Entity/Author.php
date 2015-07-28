<?php

namespace X\BlogBundle\Entity;

use X\BlogBundle\Entity\AuthorInterface;


/**
 * Class Author
 *
 * @author  Michał Rybnik <michal.rybnik@fuero.pl> 
 */
class Author implements AuthorInterface
{
    /** @var string */
    private $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}