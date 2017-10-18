<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/11
 */

namespace ArchiveAppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface;
use Narmafzam\ArchiveBundle\Entity\Letter as BaseClass;

/**
 * @ORM\Entity
 * @ORM\Table(name="letter")
 */
class Letter extends BaseClass implements LetterInterface
{
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\LetterAttachment", mappedBy="letter", cascade={"persist", "remove"})
     */
    protected $attachments;

    public function __construct ()
    {
        $this->attachments = new ArrayCollection();
    }

    public function getAttachments (): ArrayCollection
    {
        return $this->attachments;
    }

    public function addAttachment (AttachmentInterface $attachment)
    {
        $this->attachments->add($attachment);
    }

    public function removeAttachment (AttachmentInterface $attachment)
    {
        $this->attachments->removeElement($attachment);
    }

}