<?php

namespace directapi\services\vcards\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class InstantMessenger extends Model
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
