<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Date: 2017/9/29
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
 * @ORM\Table(name="letter")
 */
class Letter
{
    use IdTrait;
    use TitleTrait;
    use DescriptionTrait;
    use SubjectTrait;
    use TimestampableTrait;
    use DeletedTrait;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\LetterAttachment", mappedBy="letter")
     */
    private $attachments;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\LetterNote", mappedBy="letter")
     */
    private $notes;

    /**
     * Letter constructor.
     */
    public function __construct()
    {
        $this->attachments = new ArrayCollection();
        $this->notes = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param LetterAttachment $attachment
     */
    public function addAttachment(LetterAttachment $attachment)
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
     * @param LetterNote $note
     */
    public function addNote(LetterNote $note)
    {
        $this->notes->add($note);
    }

}