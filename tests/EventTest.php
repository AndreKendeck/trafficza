<?php

namespace Adecks\TrafficZA\Tests;

use PHPUnit\Framework\TestCase;
use Adecks\TrafficZA\Event;

class EventTest extends TestCase
{
    /** @test **/
    public function an_event_can_be_casted_to_a_string()
    {
        $eventData = json_decode(file_get_contents('tests/mocks/event.json'), true);
        $event = new Event($eventData);
        $this->assertIsString("{$event}");
    }

    /** @test **/
    public function an_event_returns_the_correct_data()
    {
        $eventData = json_decode(file_get_contents('tests/mocks/event.json'), true);
        $event = new Event($eventData);
        $this->assertEquals($eventData['LastUpdated'], $event->getLastUpdated());
        $this->assertEquals($eventData['Latitude'], $event->getLatitude());
        $this->assertEquals($eventData['Longitude'], $event->getLongitude());
        $this->assertEquals($eventData['PlannedEndDate'], $event->getPlannedEndDate());
        $this->assertEquals($eventData['Reported'], $event->getReported());
        $this->assertEquals($eventData['StartDate'], $event->getStartDate());
        $this->assertEquals($eventData['ID'], $event->getId());
        $this->assertEquals($eventData['RegionName'], $event->getRegionName());
        $this->assertEquals($eventData['CountyName'], $event->getCountyName());
        $this->assertEquals($eventData['Severity'], $event->getSeverity());
        $this->assertEquals($eventData['RoadwayName'],  $event->getRoadwayName());
        $this->assertEquals($eventData['DirectionOfTravel'], $event->getDirectionOfTravel());
        $this->assertEquals($eventData['Description'], $event->getDescription());
        $this->assertEquals($eventData['Location'], $event->getLocation());
        $this->assertEquals($eventData['LanesAffected'], $event->getLanesAffected());
        $this->assertEquals($eventData['LcsEntries'], $event->getLcsEntries());
        $this->assertEquals($eventData['NavteqLinkId'], $event->getNavteqLinkId());
        $this->assertEquals($eventData['PrimaryLocation'], $event->getPrimaryLocation());
        $this->assertEquals($eventData['SecondaryLocation'], $event->getSecondaryLocation());
        $this->assertEquals($eventData['FirstArticleCity'], $event->getFirstArticleCity());
        $this->assertEquals($eventData['SecondCity'], $event->getSecondCity());
        $this->assertEquals($eventData['EventType'], $event->getEventType());
        $this->assertEquals($eventData['EventSubType'], $event->getEventSubType());
        $this->assertEquals($eventData['MapEncodedPolyline'], $event->getMapEncodedPolyline());
    }

    /** @test **/
    public function an_event_can_be_inititalized_with_the_correct_data()
    {
        $eventData = json_decode(file_get_contents('tests/mocks/event.json'), true);
        $event = new Event($eventData);
        $this->assertIsObject($event);
    }

    /** @test **/
    public function an_event_class_has_all_its_required_properties()
    {
        $propertiesOfClass = [
            'lastUpdated',
            'latitude',
            'longitude',
            'plannedEndDate',
            'reported',
            'startDate',
            'id',
            'regionName',
            'countyName',
            'severity',
            'roadwayName',
            'directionOfTravel',
            'description',
            'location',
            'lanesAffected',
            'lanesStatus',
            'lcsEntries',
            'navteqLinkId',
            'primaryLocation',
            'secondaryLocation',
            'firstArticleCity',
            'secondCity',
            'eventType',
            'eventSubType',
            'mapEncodedPolyline'
        ];
        foreach ($propertiesOfClass as $property) {
            $this->assertClassHasAttribute($property, Event::class);
        }
    }
}
