<?php declare(strict_types = 1);

use Orchid\Constants;
use PHPUnit\Framework\TestCase;

class CoreTest extends TestCase
{
    public function testConstants()
    {
        $this->assertSame(DIRECTORY_SEPARATOR, Constants::DS);
    }
}
