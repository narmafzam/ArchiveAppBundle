<?php
/**
 * This file is part of archive.
 * Created by: Fenjoon (Farzam Webnegar Sivan Co.), info@fenjoon.net
 * Date: 2017/9/29
 */

namespace AppBundle\Model\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait BodyTrait
{
    /**
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }
}