<?php

namespace X\BlogBundle\Entity;

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