<?php

namespace directapi\services\vcards\models;

use Symfony\Component\Validator\Constraints as Assert;


class InstantMessenger
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $MessengerClient;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=255
     * )
     */
    public $MessengerLogin;
}