<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 1:28 PM
 */

namespace AppBundle\Entity\Traits;

use Symfony\Component\Validator\constraints as Assert;

trait AttachmentTrait
{
    /**
     * @ORM\Column(type="string")
     */
    private $location;

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

}