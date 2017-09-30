<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/30
 */
namespace AppBundle\Entity;

use AppBundle\Entity\Traits\BodyTrait;
use AppBundle\Entity\Traits\IdTrait;
use AppBundle\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract_note")
 */
class ContractNote
{
    use IdTrait;
    use BodyTrait;
    use TimestampableTrait;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Contract", inversedBy="ntoes")
     */
    private $contract;

    /**
     * @return Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param Contract $contract
     */
    public function setContract(Contract $contract)
    {
        $this->contract = $contract;
    }

}