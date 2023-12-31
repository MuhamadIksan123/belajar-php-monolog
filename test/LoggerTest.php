<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC;

use Monolog\Logger;

class LoggerTest extends \PHPUnit\Framework\TestCase
{
    public function testLogger()
    {
        $logger = new Logger("ProgrammerZamanNow");

        self::assertNotNull($logger);
    }

    public function testLoggetWithName()
    {
        $logget = new Logger(LoggerTest::class);

        self::assertNotNull($logget);
    }
}