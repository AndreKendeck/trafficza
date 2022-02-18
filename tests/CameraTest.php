<?php

namespace Adecks\TrafficZA\Tests;

use Adecks\TrafficZA\Camera;
use PHPUnit\Framework\TestCase;
use \Faker\Factory as FakerFactory;

class CameraTest extends TestCase
{
    protected $faker;


    /** @test */
    public function a_camera_object_can_be_initialized()
    {
        $cameraObj = json_decode(file_get_contents('tests/mocks/camera.json'), true);
        $camera = new Camera($cameraObj);
        $this->assertEquals($cameraObj['Latitude'], $camera->getLatitude());
        $this->assertEquals($cameraObj['Longitude'], $camera->getLongitude());
        $this->assertEquals($cameraObj['ID'], $camera->getId());
        $this->assertEquals($cameraObj['Name'], $camera->getName());
        $this->assertEquals($cameraObj['DirectionOfTravel'], $camera->getDirectionOfTravel());
        $this->assertEquals($cameraObj['RoadwayName'], $camera->getRoadwayName());
        $this->assertEquals($cameraObj['Url'], $camera->getUrl());
        $this->assertEquals($cameraObj['Disabled'], $camera->isDisabled());
        $this->assertEquals($cameraObj['Blocked'], $camera->isBlocked());
    }

    /** @test **/
    public function a_camera_object_values_can_be_changed()
    {
        $cameraObj = json_decode(file_get_contents('tests/mocks/camera.json'), true);
        $camera = new Camera($cameraObj);
        $faker = FakerFactory::create();
        $newData = [
            'latitude' => $faker->latitude(),
            'longitude' => $faker->longitude(),
            'id' => uniqid(),
            'name' => $faker->word(),
        ];
        $camera->setLatitude($newData['latitude']);
        $this->assertEquals($newData['latitude'] , $camera->getLatitude());
    }

    /** @test **/
    public function a_camera_class_has_all_the_relevant_properties()
    {
        $properties = [
            'latitude',
            'longitude',
            'id',
            'name',
            'directionOfTravel',
            'roadwayName',
            'url',
            'disabled',
            'blocked'
        ];
        foreach ($properties as $property) {
            $this->assertClassHasAttribute($property, Camera::class);
        }
    }
}
