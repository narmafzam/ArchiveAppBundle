<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/9
 */

namespace ArchiveAppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\Contract as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract")
 */
class Contract extends BaseClass implements ContractInterface
{
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\ContractAttachment", mappedBy="contract", cascade={"persist", "remove"})
     */
    protected $attachments;

    public function __construct()
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