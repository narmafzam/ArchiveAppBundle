<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 9/26/17
 * Time: 12:54 PM
 */

namespace AppBundle\Model\Entity;


use AppBundle\Entity\Traits\IdTrait;
use AppBundle\Entity\Traits\TitleTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="document_type")
 */
class DocumentType
{
    use IdTrait;
    use TitleTrait;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Document", mappedBy="type")
     */
    private $documents;

    /**
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param mixed $documents
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
    }

}