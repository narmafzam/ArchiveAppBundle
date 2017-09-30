<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/26
 */

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\AttachmentTrait;
use AppBundle\Entity\Traits\IdTrait;
use AppBundle\Entity\Traits\TitleTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="document_attachment")
 */
class DocumentAttachment
{
    use IdTrait;
    use TitleTrait;
    use AttachmentTrait;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Document", inversedBy="attachments")
     */
    private $document;

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document $document
     */
    public function setDocument(Document $document)
    {
        $this->document = $document;
    }

}