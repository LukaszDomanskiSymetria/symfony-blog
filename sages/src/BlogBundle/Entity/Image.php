<?php
/**
 * This file is part of the sages package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BlogBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;


/**
 * Class Image
 *
 * @author  Michał Rybnik <michal.rybnik@fuero.pl> 
 */
class Image
{
    /** @var File */
    private $file;

    /** @var string */
    private $fileName;

    /**
     * @param File   $file
     * @param string $fileName
     */
    public function __construct(File $file, $fileName)
    {
        $this->file     = $file;
        $this->fileName = $fileName;
    }


}