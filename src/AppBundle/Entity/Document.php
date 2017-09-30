<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/26
 */

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\DeletedTrait;
use AppBundle\Entity\Traits\DescriptionTrait;
use AppBundle\Entity\Traits\IdTrait;
use AppBundle\Entity\Traits\SubjectTrait;
use AppBundle\Entity\Traits\TimestampableTrait;
use AppBundle\Entity\Traits\TitleTrait;
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
    use DeletedTrait;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DocumentType", inversedBy="documents")
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DocumentAttachment", mappedBy="document")
     */
    private $attachments;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DocumentNote", mappedBy="document")
     */
    private $notes;

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

}