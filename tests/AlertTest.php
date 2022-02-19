<?php

namespace Adecks\TrafficZA\Tests;

use Adecks\TrafficZA\Alert;
use PHPUnit\Framework\TestCase;

class AlertTest extends TestCase
{
    /** @test **/
    public function an_alert_can_be_initialized()
    {
        $alertObjt = json_decode(file_get_contents('tests/mocks/alert.json'), true);
        $alert = new Alert($alertObjt);
        $this->assertEquals($alertObjt['Id'] , $alert->getId());
        $this->assertEquals($alertObjt['Message'] , $alert->getMessage());
        $this->assertEquals($alertObjt['Notes'] , $alert->getNotes());
        $this->assertEquals($alertObjt['AreaNames'] , $alert->getAreaNames()); 
    }
}
