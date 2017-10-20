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
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractLineInterface;

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

    /**
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\ContractLine", mappedBy="contract")
     */
    protected $lines;

    public function __construct()
    {
        $this->attachments = new ArrayCollection();
        $this->lines = new ArrayCollection();
    }

    public function getAttachments (): ArrayCollection
    {
        return $this->attachments;
    }

    public function addAttachment (ContractAttachmentInterface $attachment)
    {
        $this->attachments->add($attachment);
        $attachment->setContract($this);
    }

    public function removeAttachment (ContractAttachmentInterface $attachment)
    {
        $this->attachments->removeElement($attachment);
    }

    public function getLines(): ArrayCollection
    {
        return $this->lines;
    }

    public function addLine(ContractLineInterface $line)
    {
        $this->lines->add($line);
        $line->setContract($this);
    }

    public function removeLine(ContractLineInterface $line)
    {
        $this->lines->removeElement($line);
    }

}