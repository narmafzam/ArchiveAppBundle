<?php
/**
 * This file is part of archive.
 * Created by: Fenjoon (Farzam Webnegar Sivan Co.), info@fenjoon.net
 * Date: 2017/9/29
 */
namespace AppBundle\Model\Entity;

use AppBundle\Model\Entity\Traits\BodyTrait;
use AppBundle\Model\Entity\Traits\IdTrait;
use AppBundle\Model\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="letter_note")
 */
class LetterNote
{
    use IdTrait;
    use BodyTrait;
    use TimestampableTrait;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Model\Entity\Letter", inversedBy="notes")
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