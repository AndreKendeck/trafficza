<?php

namespace Adecks\TrafficZA;

abstract class TrafficModel
{
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        foreach ($data as $property => $value) {
            $property = lcfirst($property);
            if ($property === 'iD') {
                $property = strtolower($property);
            }
            $this->{$property} = $value;
        }
    }
}
