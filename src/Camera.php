<?php

namespace Adecks\TrafficZA;

use Adecks\TrafficZA\Concerns\HasCoordinates;
use JsonSerializable;

/**
 * @property float $latitude
 * @property float $longitude
 * @property string $id
 * @property string $name
 * @property string $directionOfTravel
 * @property string $roadwayName
 * @property string $url
 * @property bool $disabled
 * @property bool $blocked
 */
class Camera extends TrafficModel implements JsonSerializable
{
    use HasCoordinates;

    /**
     * @var string
     */
    protected string $id;

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
     * @var boolean
     */
    protected bool $blocked;

    /**
     * @param float $latitude
     * @return void
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @param float $longitude
     * @return void
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $id
     * @return void
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $directionOfTravel
     * @return void
     */
    public function setDirectionOfTravel(string $directionOfTravel)
    {
        $this->directionOfTravel = $directionOfTravel;
    }

    /**
     * @param string $roadwayName
     * @return void
     */
    public function setRoadwayName(string $roadwayName)
    {
        $this->roadwayName = $roadwayName;
    }

    /**
     * @param string $url
     * @return void
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @param boolean $blocked
     * @return void
     */
    public function setIsBlocked(bool $blocked)
    {
        $this->blocked = $blocked;
    }

    /**
     * @param boolean $disabled
     * @return void
     */
    public function setIsDisabled(bool $disabled)
    {
        $this->disabled = $disabled;
    }


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getDirectionOfTravel(): ?string
    {
        return $this->directionOfTravel;
    }

    /**
     * @return string
     */
    public function getRoadwayName(): string
    {
        return $this->roadwayName;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return boolean
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @return boolean
     */
    public function isBlocked(): bool
    {
        return $this->blocked;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->jsonSerialize();
    }


    /**
     * @return mixed
     */
    public function jsonSerialize(): mixed
    {
        return [
            'Latitude' => $this->latitude,
            'Longitude' => $this->longitude,
            'ID' => $this->id,
            'Name' => $this->name,
            'DirectionOfTravel' => $this->directionOfTravel,
            'RoadwayName' => $this->roadwayName,
            'Url' => $this->url,
            'Disabled' => $this->disabled,
            'Blocked' => $this->blocked
        ];
    }
}
