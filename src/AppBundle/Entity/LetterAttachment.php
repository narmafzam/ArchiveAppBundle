<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Date: 2017/9/29
 */

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\AttachmentTrait;
use AppBundle\Entity\Traits\IdTrait;
use AppBundle\Entity\Traits\TitleTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="letter_attachment")
 */
class LetterAttachment
{
    use IdTrait;
    use TitleTrait;
    use AttachmentTrait;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Letter", inversedBy="attachments")
     */
    private $letter;

    /**
     * @return Letter
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * @param Letter $letter
     */
    public function setLetter(Letter $letter)
    {
        $this->letter = $letter;
    }
}