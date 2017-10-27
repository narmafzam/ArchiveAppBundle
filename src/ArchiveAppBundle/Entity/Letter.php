<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/11
 */

namespace ArchiveAppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterAttachmentInterface;
use Narmafzam\ArchiveBundle\Entity\Base\Letter as BaseClass;

/**
 * @ORM\Entity
 * @ORM\Table(name="letter")
 */
class Letter extends BaseClass
{
    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\LetterAttachment", mappedBy="letter", cascade={"persist", "remove"})
     */
    protected $attachments;

    public function __construct ()
    {
        $this->attachments = new ArrayCollection();
    }

    public function getAttachments (): Collection
    {
        return $this->attachments;
    }

    public function addAttachment (LetterAttachmentInterface $attachment)
    {
        $this->attachments->add($attachment);
    }

    public function removeAttachment (LetterAttachmentInterface $attachment)
    {
        $this->attachments->removeElement($attachment);
    }

}