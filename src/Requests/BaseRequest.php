<?php

namespace Adecks\TrafficZA\Requests;

/**
 * This class acts as a base request for all
 * Requests on the iTraffic API
 */
abstract class BaseRequest
{
    protected $key = null;

    protected $format = 'json';
}
