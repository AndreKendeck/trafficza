<?php

namespace Adecks\TrafficZA;

use JsonSerializable;
use \Carbon\Carbon;


/**
 * A wrapper class for events
 * @see https://www.i-traffic.co.za/developers/help/api/get-api-getevents_key_format
 */
class Event implements JsonSerializable
{

    /**
     * @var string
     */
    protected string $lastUpdated;

    /**
     * @var float
     */
    protected float $latitude;

    /**
     * @var float
     */
    protected float $longitude;

    /**
     * @var string
     */
    protected string $plannedEndDate;

    /**
     * @var string
     */
    protected string $reported;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $regionName;

    /**
     * @var string|null
     */
    protected ?string $countyName;

    /**
     * @var string
     */
    protected string $severity;

    /**
     * @var string
     */
    protected string $roadwayName;

    /**
     * @var string
     */
    protected string $directionOfTravel;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var string
     */
    protected string $location;

    /**
     * @var string
     */
    protected string $lanesAffected;

    /**
     * @var string|null
     */
    protected ?string $lanesStatus;

    /**
     * @var string|null
     */
    protected ?string $lcsEntries;

    /**
     * @var string
     */
    protected string $navteqLinkId;

    /**
     * @var string|null
     */
    protected ?string $primaryLocation;

    /**
     * @var string|null
     */
    protected ?string $secondaryLocation;

    /**
     * @var string|null
     */
    protected ?string $firstArticleCity;

    /**
     * @var string|null
     */
    protected ?string $secondCity;

    /**
     * @var string
     */
    protected string $eventType;

    /**
     * @var string
     */
    protected string $eventSubType;

    /**
     * @var string|null
     */
    protected ?string $mapEncodedPolyline;

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        foreach ($data as $property => $value) {
            $property = lcfirst($property);
            $this->{$property} = $value;
        }
    }

    /**
     * @return string
     */
    public function getLastUpdated(): string
    {
        return $this->lastUpdated;
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
    public function getPlannedEndDate(): string
    {
        return $this->plannedEndDate;
    }

    /**
     * @return string
     */
    public function getReported(): string
    {
        return $this->reported;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRegionName(): string
    {
        return $this->regionName;
    }

    /**
     * @return void
     */
    public function getCountyName()
    {
        return $this->countyName;
    }

    /**
     * @return string
     */
    public function getSeverity(): string
    {
        return $this->severity;
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
    public function getDirectionOfTravel(): string
    {
        return $this->directionOfTravel;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getLanesAffected(): string
    {
        return $this->lanesAffected;
    }

    /**
     * @return string|null
     */
    public function getLanesStatus(): ?string
    {
        return $this->lanesStatus;
    }

    /**
     * @return string|null
     */
    public function getLcsEntries(): ?string
    {
        return $this->lcsEntries;
    }

    /**
     * @return string|null
     */
    public function getNavteqLinkId(): ?string
    {
        return $this->navteqLinkId;
    }

    /**
     * @return string|null
     */
    public function getPrimaryLocation(): ?string
    {
        return $this->primaryLocation;
    }

    /**
     * @return string|null
     */
    public function getSecondaryLocation(): ?string
    {
        return $this->secondaryLocation;
    }

    /**
     * @return string|null
     */
    public function getFirstArticleCity(): ?string
    {
        return $this->firstArticleCity;
    }

    /**
     * @return string|null
     */
    public function getSecondCity(): ?string
    {
        return $this->secondCity;
    }

    /**
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * @return string
     */
    public function getEventSubType(): string
    {
        return $this->eventSubType;
    }

    /**
     * @return string|null
     */
    public function getMapEncodedPolyline(): ?string
    {
        return $this->mapEncodedPolyline;
    }

    /**
     * @param string $lastUpdated
     * @return void
     */
    public function setLastUpdated(string $lastUpdated): void
    {
        $this->lastUpdated = $lastUpdated;
    }

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
     * @param string $plannedEndDate
     * @return void
     */
    public function setPlannedEndDate(string $plannedEndDate): void
    {
        $this->plannedEndDate = $plannedEndDate;
    }

    /**
     * @param string $reported
     * @return void
     */
    public function setReported(string $reported): void
    {
        $this->reported = $reported;
    }

    /**
     * @param string $startDate
     * @return void
     */
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
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
     * @param string $regionName
     * @return void
     */
    public function setRegionName(string $regionName): void
    {
        $this->regionName = $regionName;
    }

    /**
     * @param string $countyName
     * @return void
     */
    public function setCountyName(string $countyName): void
    {
        $this->countyName = $countyName;
    }

    /**
     * @param string $severity
     * @return void
     */
    public function setSeverity(string $severity): void
    {
        $this->severity = $severity;
    }

    /**
     * @param string $roadwayName
     * @return void
     */
    public function setRoadwayName(string $roadwayName): void
    {
        $this->roadwayName = $roadwayName;
    }

    public function setDirectionOfTravel(string $directionOfTravel): void
    {
        $this->directionOfTravel = $directionOfTravel;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function setLanesAffected(string $lanesAffected): void
    {
        $this->lanesAffected = $lanesAffected;
    }

    public function setLanesStatus($lanesStatus): void
    {
        $this->lanesStatus = $lanesStatus;
    }

    public function setLcsEntries($lcsEntries): void
    {
        $this->lcsEntries = $lcsEntries;
    }

    public function setNavteqLinkId(string $navteqLinkId): void
    {
        $this->navteqLinkId = $navteqLinkId;
    }

    public function setPrimaryLocation($primaryLocation): void
    {
        $this->primaryLocation = $primaryLocation;
    }

    public function setSecondaryLocation($secondaryLocation): void
    {
        $this->secondaryLocation = $secondaryLocation;
    }

    public function setFirstArticleCity($firstArticleCity): void
    {
        $this->firstArticleCity = $firstArticleCity;
    }

    public function setSecondCity($secondCity): void
    {
        $this->secondCity = $secondCity;
    }

    public function setEventType(string $eventType): void
    {
        $this->eventType = $eventType;
    }

    public function setEventSubType(string $eventSubType): void
    {
        $this->eventSubType = $eventSubType;
    }

    public function setMapEncodedPolyline($mapEncodedPolyline): void
    {
        $this->mapEncodedPolyline = $mapEncodedPolyline;
    }

    /**
     * Return a json format of the object
     * @return string
     */
    public function __toString()
    {
        return (string) $this->jsonSerialize();
    }

    public function jsonSerialize(): mixed
    {
        return [
            'LastUpdated' => $this->lastUpdated,
            'Latitude' => $this->latitude,
            'Longitude' => $this->longitude,
            'PlannedEndDate' => $this->plannedEndDate,
            'Reported' => $this->reported,
            'StartDate' => $this->startDate,
            'ID' => $this->id,
            'RegionName' => $this->regionName,
            'CountyName' => $this->countyName,
            'Severity' => $this->severity,
            'RoadwayName' => $this->roadwayName,
            'DirectionOfTravel' => $this->directionOfTravel,
            'Description' => $this->description,
            'Location' => $this->location,
            'LanesAffected' => $this->lanesAffected,
            'LanesStatus' => $this->lanesStatus,
            'LcsEntries' => $this->lcsEntries,
            'NavteqLinkId' => $this->navteqLinkId,
            'PrimaryLocation' => $this->primaryLocation,
            'SecondaryLocation' => $this->secondaryLocation,
            'FirstArticleCity' => $this->firstArticleCity,
            'SecondCity' => $this->secondCity,
            'EventType' => $this->eventType,
            'EventSubType' => $this->eventSubType,
            'MapEncodedPolyline' => $this->mapEncodedPolyline,
        ];
    }
}
