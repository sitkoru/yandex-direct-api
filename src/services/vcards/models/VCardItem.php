<?php

namespace directapi\services\vcards\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class VCardItem extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $CampaignId;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=50
     * )
     */
    public $Country;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=55
     * )
     */
    public $City;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $WorkTime;

    /**
     * @var Phone
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\vcards\models\Phone")
     */
    public $Phone;

    /**
     * @var string
     * @Assert\Length(
     *     max=55
     * )
     */
    public $Street;

    /**
     * @var string
     * @Assert\Length(
     *     max=30
     * )
     */
    public $House;

    /**
     * @var string
     * @Assert\Length(
     *     max=10
     * )
     */
    public $Building;

    /**
     * @var string
     * @Assert\Length(
     *     max=100
     * )
     */
    public $Apartment;

    /**
     * @var InstantMessenger
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\vcards\models\InstantMessenger")
     */
    public $InstantMessenger;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=255
     * )
     */
    public $CompanyName;

    /**
     * @var string
     * @Assert\Length(
     *     max=200
     * )
     */
    public $ExtraMessage;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $ContactEmail;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $Ogrn;

    /**
     * @var int
     */
    public $MetroStationId;

    /**
     * @var MapPoint
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\vcards\models\MapPoint")
     */
    public $PointOnMap;

    /**
     * @var string
     * @Assert\Length(
     *     max=155
     * )
     */
    public $ContactPerson;

}