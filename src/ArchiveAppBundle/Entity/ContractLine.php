<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace ArchiveAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\ContractLine as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractLineInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractLineKindInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\DescriptionInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\TitleInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract_line")
 */
class ContractLine extends BaseClass implements ContractLineInterface, TitleInterface, DescriptionInterface
{
    /**
     * @ORM\ManyToOne(targetEntity="ArchiveAppBundle\Entity\Contract", inversedBy="lines")
     */
    protected $contract;

    /**
     * @ORM\ManyToOne(targetEntity="ArchiveAppBundle\Entity\ContractLineKind", inversedBy="lines")
     */
    protected $kind;

    public function getContract(): ContractInterface
    {
        return $this->contract;
    }

    public function setContract(ContractInterface $contract)
    {
        $this->contract = $contract;
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