<?php
/**
 * This file is part of the sages package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BlogBundle\Entity;


/**
 * Class Tag
 *
 * @author  Michał Rybnik <michal.rybnik@fuero.pl> 
 */
class Tag
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