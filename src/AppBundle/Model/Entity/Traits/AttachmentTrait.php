<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/9/26
 */

namespace AppBundle\Model\Entity\Traits;

use Symfony\Component\Validator\Constraints as Assert;

trait AttachmentTrait
{
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\File(
     *     mimeTypes = {
     *         "application/pdf",
     *         "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
     *         "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
     *         "application/vnd.openxmlformats-officedocument.presentationml.presentation",
     *         "application/msword",
     *         "application/vnd.ms-excel",
     *         "application/vnd.ms-powerpoint",
     *         "application/vnd.ms-access",
     *         "image/bmp",
     *         "image/jpeg",
     *         "image/png",
     *         "image/tiff",
     *         "image/vnd.adobe.photoshop",
     *         "image/vnd.dwg"
     *     }
     * )
     */
    private $location;

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

}