<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 1:57 PM
 */

namespace AppBundle\Model\Entity\Traits;


use Doctrine\ORM\Mapping as ORM;

trait DescriptionTrait
{
    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}