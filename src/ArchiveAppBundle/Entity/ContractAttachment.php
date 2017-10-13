<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/13
 */

namespace ArchiveAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\ContractAttachment as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractAttachmentInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract_attachment")
 */
class ContractAttachment extends BaseClass implements ContractAttachmentInterface
{
    /**
     * @ORM\ManyToOne(targetEntity="ArchiveAppBundle\Entity\Contract", inversedBy="attachments")
     */
    protected $contract;

    /**
     * @return ContractInterface
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param ContractInterface $contract
     */
    public function setContract(ContractInterface $contract)
    {
        $this->contract = $contract;
    }
}