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
     * @param string $imgPath
     */
    public function __construct($imgPath)
    {
        $imageSize = getimagesize($imgPath);
        $imageData = base64_encode(file_get_contents($imgPath));
        $imageSrc = "data:{$imageSize['mime']};base64,{$imageData}";
        $this->base64Image = $imageSrc;
    }

}