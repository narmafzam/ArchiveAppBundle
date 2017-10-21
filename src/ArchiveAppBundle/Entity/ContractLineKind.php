<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace ArchiveAppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\ContractLineKind as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractCommonLineInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractLineInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractLineKindInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract_line_kind")
 */
class ContractLineKind extends BaseClass implements ContractLineKindInterface
{
    /**
     * @ORM\ManyToOne(targetEntity="ArchiveAppBundle\Entity\ContractLineKind", inversedBy="children")
     */
    protected $parent;

    /**
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\ContractLineKind",mappedBy="parent", cascade={"persist", "remove"})
     */
    protected $children;

    /**
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\ContractLine", mappedBy="kind")
     */
    protected $lines;

    /**
     * @ORM\OneToMany(targetEntity="ArchiveAppBundle\Entity\ContractCommonLine", mappedBy="kind")
     */
    protected $commonLines;

    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->lines = new ArrayCollection();
        $this->commonLines = new ArrayCollection();
    }

    public function getParent(): ContractLineKindInterface
    {
        return $this->parent;
    }

    public function setParent(ContractLineKindInterface $parent)
    {
        $this->parent = $parent;
    }

    public function getChildren(): ArrayCollection
    {
        return $this->children;
    }

    public function addChild(ContractLineKindInterface $child)
    {
        $this->children->add($child);
        $child->setParent($this);
    }

    public function removeChild(ContractLineKindInterface $child)
    {
        $this->children->removeElement($child);
    }

    public function getLines(): ArrayCollection
    {
        return $this->lines;
    }

    public function addLine(ContractLineInterface $contractLine)
    {
        $this->lines->add($contractLine);
        $contractLine->setKind($this);
    }

    public function removeLine(ContractLineInterface $contractLine)
    {
        $this->lines->removeElement($contractLine);
    }

    public function getCommonLines(): ArrayCollection
    {
        return $this->commonLines;
    }

    public function addCommonLine(ContractCommonLineInterface $commonLine)
    {
        $this->commonLines->add($commonLine);
        $commonLine->setKind($this);
    }

    public function removeCommonLine(ContractCommonLineInterface $commonLine)
    {
        $this->commonLines->removeElement($commonLine);
    }

}