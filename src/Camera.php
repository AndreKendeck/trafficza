<?php

namespace Adecks\TrafficZA;

use JsonSerializable;

class Camera implements JsonSerializable
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var float
     */
    protected float $longitude;

    /**
     * @var float
     */
    protected float $latitude;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string|null
     */
    protected ?string $directionOfTravel;

    /**
     * @var string
     */
    protected string $roadwayName;

    /**
     * @var string
     */
    protected string $url;

    /**
     * @var boolean
     */
    protected bool $disabled;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
        }
    }


    /**
     * @var boolean
     */
    protected bool $blocked;

    public function jsonSerialize(): mixed
    {
        return [];
    }
}
