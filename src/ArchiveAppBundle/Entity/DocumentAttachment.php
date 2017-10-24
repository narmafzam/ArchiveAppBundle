<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/18
 */

namespace ArchiveAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\Base\DocumentAttachment as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="document_attachment")
 */
class DocumentAttachment extends BaseClass
{
    /**
     * @ORM\ManyToOne(targetEntity="ArchiveAppBundle\Entity\Document", inversedBy="attachments")
     */
    protected $document;

    public function getDocument (): DocumentInterface
    {
        return $this->document;
    }

    public function setDocument (DocumentInterface $document)
    {
        $this->document = $document;
    }

}