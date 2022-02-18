<?php

namespace Adecks\TrafficZA;

use JsonSerializable;

/**
 * @property string $id
 * @property string $message
 * @property string $notes
 * @property array $areaNames
 * @see https://www.i-traffic.co.za/developers/help/api/get-api-getalerts_key_format
 */
class Alert extends TrafficModel implements JsonSerializable
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var string
     */
    protected string $notes;

    /**
     * @var array
     */
    protected array $areaNames;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return array 
     */
    public function getAreaNames()
    {
        return $this->areaNames;
    }

    /**
     * @param string $id
     * @return void
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $message
     * @return void
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    /**
     * @param string $notes
     * @return void
     */
    public function setNotes(string $notes)
    {
        $this->notes = $notes;
    }

    /**
     * @param array $areaNames
     * @return void
     */
    public function setAreaNames(array $areaNames)
    {
        $this->areaNames = $areaNames;
    }


    public function __toString()
    {
        return (string) $this->jsonSerialize();
    }

    public function jsonSerialize(): mixed
    {
        return [
            'Id' => $this->id,
            'Message' => $this->message,
            'Notes' => $this->notes,
            'AreaNames' => $this->areaNames
        ];
    }
}
