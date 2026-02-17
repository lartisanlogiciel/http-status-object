<?php

namespace HttpStatusObjectTests;

use HttpStatusObject\HttpStatusCollection;
use HttpStatusObject\Implementations\ClientErrorsHttpStatus;
use PHPUnit\Framework\TestCase;

class HttpStatusCollectionTest extends TestCase
{
    public function testGetByStatusCode()
    {
        $httpStatusList = HttpStatusCollection::GetByStatusCode(420);

        $this->assertCount(2, $httpStatusList);
    }

    public function testGetFirstByStatusCode()
    {
        $httpStatus = HttpStatusCollection::GetFirstByStatusCode(418);

        $this->assertNotNull($httpStatus);
        $this->assertInstanceOf(ClientErrorsHttpStatus::class, $httpStatus);
        $this->assertEquals(ClientErrorsHttpStatus::ImaTeaPot(), $httpStatus);

    }

    public function testAll()
    {
        $httpStatusList = HttpStatusCollection::All();

        $this->assertCount(111, $httpStatusList);
    }

}
