<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 1:53 PM
 */

namespace AppBundle\Model\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait TitleTrait
{
    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}