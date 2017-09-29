<?php
/**
 * This file is part of archive.
 * Created by: Fenjoon (Farzam Webnegar Sivan Co.), info@fenjoon.net
 * Date: 2017/9/29
 */

namespace AppBundle\Model\Entity;

use AppBundle\Model\Entity\Traits\DeletedTrait;
use AppBundle\Model\Entity\Traits\DescriptionTrait;
use AppBundle\Model\Entity\Traits\IdTrait;
use AppBundle\Model\Entity\Traits\SubjectTrait;
use AppBundle\Model\Entity\Traits\TimestampableTrait;
use AppBundle\Model\Entity\Traits\TitleTrait;
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
     * @ORM\OneToMany(targetEntity="AppBundle\Model\Entity\LetterAttachment", mappedBy="letter")
     */
    private $attachments;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Model\Entity\LetterNote", mappedBy="letter")
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