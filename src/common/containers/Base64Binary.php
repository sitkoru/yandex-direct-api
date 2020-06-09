<?php

namespace directapi\common\containers;

use Symfony\Component\Validator\Constraints as Assert;

class Base64Binary implements \JsonSerializable
{
    /**
     * @var string[]
     * @Assert\NotBlank()
     */
    public $base64Image;

    /**
     * Base64Binary constructor.
     *
     * @param string $imgPath
     *
     * @throws \ErrorException
     */
    public function __construct($imgPath)
    {
        if (!is_file($imgPath)) {
            throw new \ErrorException("File doesn't exists: {$imgPath}");
        }
        $imageData = base64_encode(file_get_contents($imgPath));
        $this->base64Image = $imageData;
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link  http://php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed data which can be serialized by <b>json_encode</b>,
     *               which is a value of any type other than a resource.
     *
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return $this->base64Image;
    }
}
