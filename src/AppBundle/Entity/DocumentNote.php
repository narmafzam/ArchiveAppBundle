<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 1:35 PM
 */

namespace AppBundle\Entity;


use AppBundle\Entity\Traits\IdTrait;
use AppBundle\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="document_note")
 */
class DocumentNote
{
    use IdTrait;
    use TimestampableTrait;

    /**
     * @ORM\Column(type="string")
     */
    private $body;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Document", inversedBy="notes")
     */
    private $document;

}