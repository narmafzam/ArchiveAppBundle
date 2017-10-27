<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/9
 */

namespace ArchiveAppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\Base\Contract as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractAttachmentInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractLineInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractNoteInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract")
 */
class Contract extends BaseClass
{
    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\ContractAttachment", mappedBy="contract", cascade={"persist", "remove"})
     */
    protected $attachments;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\ContractLine", mappedBy="contract")
     */
    protected $lines;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\ContractNote", mappedBy="contract")
     */
    protected $notes;

    public function __construct()
    {
        $this->attachments = new ArrayCollection();
        $this->lines = new ArrayCollection();
        $this->notes = new ArrayCollection();
    }

    public function getAttachments(): Collection
    {
        return $this->attachments;
    }

    public function addAttachment(ContractAttachmentInterface $attachment)
    {
        $this->attachments->add($attachment);
        $attachment->setContract($this);
    }

    public function removeAttachment(ContractAttachmentInterface $attachment)
    {
        $this->attachments->removeElement($attachment);
    }

    public function getLines(): Collection
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

    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(ContractNoteInterface $note)
    {
        $this->notes->add($note);
        $note->setContract($this);
    }

    public function removeNote(ContractNoteInterface $note)
    {
        $this->notes->removeElement($note);
    }

}