<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 1:57 PM
 */

namespace AppBundle\Entity\Traits;


use Doctrine\ORM\Mapping as ORM;

trait DescriptionTrait
{
    /**
     * @ORM\Column(type="text")
     */private $description;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}