<?php

namespace Adecks\TrafficZA;

use JsonSerializable;

class Roadway implements JsonSerializable
{
    /**
     * @var string
     */
    protected string $roadwayName;

    /**
     * @var integer
     */
    protected int $sortOrder;

    /**
     * @param string $roadwayName
     * @param integer|null $sortOrder
     */
    public function __construct(string $roadwayName, int $sortOrder = null)
    {
        $this->roadwayName = $roadwayName;
        $this->sortOrder = $sortOrder;
    }

    /**
     * @return string
     */
    public function getRoadwayName(): string
    {
        return $this->roadwayName;
    }

    /**
     * @return integer|null
     */
    public function getSortOrder(): ?int
    {
        return $this->getSortOrder;
    }

    /**
     * @param string $roadwayName
     * @return void
     */
    public function setRoadwayName(string $roadwayName): void
    {
        $this->roadwayName = $roadwayName;
    }

    /**
     * @param integer $sortOrder
     * @return void
     */
    public function setSortOrder(int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    public function __toString()
    {
        return json_encode($this->jsonSerialize());
    }

    public function jsonSerialize()
    {
        return [
            'RoadwayName' => $this->roadwayName,
            'SortOrder' => $this->sortOrder,
        ];
    }
}
