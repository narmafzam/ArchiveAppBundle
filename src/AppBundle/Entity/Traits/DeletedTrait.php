<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Date: 2017/9/29
 */

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait DeletedTrait
{
    /**
     * @ORM\Column(type="boolean")
     */
    private $deleted;

    /**
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param boolean $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

}