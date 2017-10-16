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
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractAttachmentInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract")
 */
class Contract extends BaseClass implements ContractInterface
{
    /**
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\ContractAttachment", mappedBy="contract", cascade={"persist", "remove"})
     */
    protected $attachments;

    public function __construct()
    {
        $this->attachments = new ArrayCollection();
    }

    /**
     * @return ArrayCollection<AttachmentInterface>
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param ContractAttachmentInterface $contractAttachment
     */
    public function addAttachment(ContractAttachmentInterface $contractAttachment)
    {
        $this->attachments->add($contractAttachment);
    }

    /**
     * @param ContractAttachmentInterface $contractAttachment
     */
    public function removeAttachment(ContractAttachmentInterface $contractAttachment)
    {
        $this->attachments->removeElement($contractAttachment);
    }
}