<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 1:01 PM
 */

namespace AppBundle\Model\Entity;


use AppBundle\Model\Entity\Traits\AttachmentTrait;
use AppBundle\Model\Entity\Traits\IdTrait;
use AppBundle\Model\Entity\Traits\TitleTrait;
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Model\Entity\Document", inversedBy="attachments")
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