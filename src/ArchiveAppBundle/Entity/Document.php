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
use Narmafzam\ArchiveBundle\Entity\Base\Document as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentAttachmentInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="document")
 */
class Document extends BaseClass
{
    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\DocumentAttachment", mappedBy="document", cascade={"persist", "remove"})
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

    public function addAttachment (DocumentAttachmentInterface $attachment)
    {
        $this->attachments->add($attachment);
    }

    public function removeAttachment (DocumentAttachmentInterface $attachment)
    {
        $this->attachments->removeElement($attachment);
    }

}