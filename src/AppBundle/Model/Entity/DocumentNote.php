<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 1:35 PM
 */

namespace AppBundle\Model\Entity;


use AppBundle\Model\Entity\Traits\BodyTrait;
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
    use BodyTrait;
    use TimestampableTrait;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Model\Entity\Document", inversedBy="notes")
     */
    private $document;

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

}