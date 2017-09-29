<?php
/**
 * This file is part of archive.
 * Created by: Fenjoon (Farzam Webnegar Sivan Co.), info@fenjoon.net
 * Date: 2017/9/29
 */

namespace AppBundle\Model\Entity\Traits;

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