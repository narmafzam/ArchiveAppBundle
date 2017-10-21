<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace ArchiveAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface;
use Narmafzam\ArchiveBundle\Entity\LetterAttachment as BaseClass;

/**
 * @ORM\Entity
 * @ORM\Table(name="letter_attachment")
 */
class LetterAttachment extends BaseClass
{
    /**
     * @ORM\ManyToOne(targetEntity="ArchiveAppBundle\Entity\Letter", inversedBy="attachments")
     */
    protected $letter;

    public function getLetter (): LetterInterface
    {
        return $this->letter;
    }

    public function setLetter (LetterInterface $letter)
    {
        $this->letter = $letter;
    }

}