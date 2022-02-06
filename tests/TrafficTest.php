<?php

namespace Adecks\TrafficZA\Tests;

use Adecks\TrafficZA\Event;
use PHPUnit\Framework\TestCase;
use Adecks\TrafficZA\Traffic;

class TrafficTest extends TestCase
{
    /** @test **/
    public function a_traffic_object_can_be_initialized()
    {
        $notRealKey = uniqid('MYKEY');
        $traffic = new Traffic($notRealKey);
        $this->assertIsObject($traffic);
        $this->assertEquals($notRealKey, $traffic->getApiKey());
        $this->assertEquals('json', $traffic->getResponseFormat());
        $this->assertEquals('https://www.i-traffic.co.za/api', Traffic::URL);
    }

    /** @test **/
    public function a_traffic_object_can_get_traffic_objects()
    {
        $eventData = json_decode(file_get_contents('tests/mocks/events.json'), true);
        $events = array_map(function (array $event) {
            return new Event($event);
        }, $eventData);
        $trafficMock = $this->createMock(Traffic::class);
        $trafficMock->method('getEvents')->willReturn($events);
        $this->assertIsArray($trafficMock->getEvents());
        foreach ($trafficMock->getEvents() as $event) {
            $this->assertTrue($event instanceof Event);
        }
    }
}
