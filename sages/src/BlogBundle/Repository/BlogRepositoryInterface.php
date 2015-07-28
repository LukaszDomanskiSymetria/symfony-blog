<?php

namespace X\BlogBundle\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use X\BlogBundle\Entity\Blog;

/**
 * Interface BlogRepositoryInterface
 *
 * @author  Michał Rybnik <michal.rybnik@fuero.pl> 
 */
interface BlogRepositoryInterface
{
    /**
     * @return ArrayCollection
     */
    public function findAll();

    /**
     * @param string $name
     *
     * @return Blog|null
     */
    public function find($name);
}