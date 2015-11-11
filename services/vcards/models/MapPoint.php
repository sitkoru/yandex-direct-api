<?php

namespace directapi\services\vcards\models;

use Symfony\Component\Validator\Constraints as Assert;

class MapPoint
{
    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Range(
     *     min=-180,
     *     max=180
     * )
     */
    public $X;

    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Range(
     *     min=-90,
     *     max=90
     * )
     */
    public $Y;

    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Range(
     *     min=-180,
     *     max=180
     * )
     */
    public $X1;

    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Range(
     *     min=-90,
     *     max=90
     * )
     */
    public $Y1;

    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Range(
     *     min=-180,
     *     max=180
     * )
     */
    public $X2;

    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Range(
     *     min=-90,
     *     max=90
     * )
     */
    public $Y2;
}