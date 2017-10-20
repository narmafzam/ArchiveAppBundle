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
use Narmafzam\ArchiveBundle\Entity\ContractCommonLine as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\BodyInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractCommonLineInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractLineKindInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractTemplateInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\DescriptionInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\TitleInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract_common_line")
 */
class ContractCommonLine extends BaseClass implements ContractCommonLineInterface, TitleInterface, BodyInterface, DescriptionInterface
{
    /**
     * @ORM\ManyToMany(targetEntity="ArchiveAppBundle\Entity\ContractTemplate", inversedBy="commonLines")
     */
    protected $templates;

    /**
     * @ORM\ManyToOne(targetEntity="ArchiveAppBundle\Entity\ContractLineKind", inversedBy="commonLines")
     */
    protected $kind;

    public function __construct()
    {
        $this->templates = new ArrayCollection();
    }

    public function getTemplates(): ArrayCollection
    {
        return $this->templates;
    }

    public function addTemplate(ContractTemplateInterface $contractTemplate)
    {
        $this->templates->add($contractTemplate);
    }

    public function removeTemplate(ContractTemplateInterface $contractTemplate)
    {
        $this->templates->removeElement($contractTemplate);
    }

    public function getKind(): ContractLineKindInterface
    {
        return $this->kind;
    }

    public function setKind(ContractLineKindInterface $contractLineKind)
    {
        $this->kind = $contractLineKind;
    }

}