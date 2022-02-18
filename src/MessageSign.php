<?php

namespace Adecks\TrafficZA;

use Adecks\TrafficZA\Concerns\HasCoordinates;
use JsonSerializable;

class MessageSign extends TrafficModel implements JsonSerializable
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
     * @var string
     */
    protected string $roadway;

    /**
     * @var string
     */
    protected string $directionOfTravel;

    /**
     * @var array
     */
    protected array $messages;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->getId;
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
     * @return string
     */
    public function getRoadway(): string
    {
        return $this->roadway;
    }

    /**
     * @param string $roadway
     * @return void
     */
    public function setRoadway(string $roadway): void
    {
        $this->roadway = $roadway;
    }

    /**
     * @return string
     */
    public function getDirectionOfTravel(): string
    {
        return $this->directionOfTravel;
    }

    /**
     * @param string $directionOfTravel
     * @return void
     */
    public function setDirectionOfTravel(string $directionOfTravel): void
    {
        $this->directionOfTravel = $directionOfTravel;
    }

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @param array $messages
     * @return void
     */
    public function setMessages(array $messages): void
    {
        $this->messages = $messages;
    }

    public function __toString()
    {
        return (string) $this->jsonSerialize();
    }

    public function jsonSerialize(): mixed
    {
        return [
            'Latitude' => $this->latitude,
            'Longitude' => $this->longitude,
            'ID' => $this->id,
            'Name' => $this->name,
            'Roadway' => $this->roadway,
            'DirectionOfTravel' => $this->directionOfTravel,
            'Messages' => $this->messages
        ];
    }
}
