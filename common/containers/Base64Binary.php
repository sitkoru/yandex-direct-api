<?php

namespace directapi\common\containers;

class Base64Binary
{
    /**
     * @var string[]
     * @Assert\NotBlank()
     */
    public $base64Image;

    /**
     * Base64Binary constructor.
     * @param string $imgPath1
     */
    public function __construct($imgPath1)
    {
        $imageSize = getimagesize($imgPath1);
        $imageData = base64_encode(file_get_contents($imgPath1));
        $imageSrc = "data:{$imageSize['mime']};base64,{$imageData}";
        $this->base64Image = $imageSrc;
    }

}