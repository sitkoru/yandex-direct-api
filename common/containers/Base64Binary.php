<?php

namespace directapi\common\containers;

class Base64Binary
{
    /**
     * @var string[]
     * @Assert\NotBlank()
     */
    public $base64Image;

    public function __construct($img)
    {
        $imageSize = getimagesize($img);
        $imageData = base64_encode(file_get_contents($img));
        $imageSrc = "data:{$imageSize['mime']};base64,{$imageData}";
        $this->base64Image = $imageSrc;
    }

}