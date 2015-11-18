<?php

namespace directapi\services\vcards\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class Phone extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=1,
     *     max=4
     * )
     */
    public $CountryCode;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=1,
     *     max=5
     * )
     */
    public $CityCode;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=5,
     *     max=9
     * )
     */
    public $PhoneNumber;

    /**
     * @var string
     * @Assert\Length(
     *     min=1,
     *     max=6
     * )
     */
    public $Extension;
}