<?php
/**
 * This file is part of the sages package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace X\BlogBundle\Repository\Memory;

use X\BlogBundle\Entity\Author;
use X\BlogBundle\Repository\BlogRepositoryInterface;
use X\BlogBundle\Entity\Blog;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Class InMemoryBlogRepository
 *
 * @author  Michał Rybnik <michal.rybnik@fuero.pl> 
 */
class InMemoryBlogRepository implements BlogRepositoryInterface
{
    /** @var \Doctrine\Common\Collections\ArrayCollection */
    private $blogs;

    /**
     *
     */
    public function __construct()
    {
        $this->blogs = new ArrayCollection();
        $blogs       = [
            new Blog(new Author('Admin'), 'admin', 'Blog admina'),
            new Blog(new Author('Rasmus'), 'rasmus', 'Blog Rasmusa'),
        ];
        foreach ($blogs as $blog) {
            $this->blogs[$blog->getName()] = $blog;
        }
    }

    /**
     * @return ArrayCollection
     */
    public function findAll()
    {
        return $this->blogs;
    }

    /**
     * @param string $name
     *
     * @return Blog|null
     */
    public function find($name)
    {
        if ($this->blogs->containsKey($name)) {
            return $this->blogs[$name];
        }

        return null;
    }

}