<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 12:38 PM
 */

namespace AppBundle\Model\Entity;

use AppBundle\Model\Entity\Traits\DescriptionTrait;
use AppBundle\Model\Entity\Traits\IdTrait;
use AppBundle\Model\Entity\Traits\SubjectTrait;
use AppBundle\Model\Entity\Traits\TimestampableTrait;
use AppBundle\Model\Entity\Traits\TitleTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="document")
 */
class Document
{
    use IdTrait;
    use TitleTrait;
    use TimestampableTrait;
    use DescriptionTrait;
    use SubjectTrait;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Model\Entity\DocumentType", inversedBy="documents")
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Model\Entity\DocumentAttachment", mappedBy="document")
     */
    private $attachments;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Model\Entity\DocumentNote", mappedBy="document")
     */
    private $notes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deleted;

    /**
     * Document constructor.
     */
    public function __construct()
    {
        $this->attachments = new ArrayCollection();
        $this->notes = new ArrayCollection();
    }

    /**
     * @return DocumentType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param DocumentType $type
     */
    public function setType(DocumentType $type)
    {
        $this->type = $type;
    }

    /**
     * @return ArrayCollection
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param DocumentAttachment $attachment
     */
    public function addAttachment(DocumentAttachment $attachment)
    {
        $this->attachments->add($attachment);
    }

    /**
     * @return ArrayCollection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param DocumentNote $note
     */
    public function addNote(DocumentNote $note)
    {
        $this->notes->add($note);
    }

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