<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 1:35 PM
 */

namespace AppBundle\Model\Entity;


use AppBundle\Model\Entity\Traits\IdTrait;
use AppBundle\Model\Entity\Traits\TimestampableTrait;
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Model\Entity\Document", inversedBy="notes")
     */
    private $document;

}