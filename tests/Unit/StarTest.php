<?php


namespace Danbka\Kyto\Tests\Unit;


use Danbka\Kyto\Exception\UnsupportedSizeException;
use Danbka\Kyto\Service\Shape\Star;
use PHPUnit\Framework\TestCase;

class StarTest extends TestCase
{
    public function testUnsupportedSizeException()
    {
        $this->expectException(UnsupportedSizeException::class);

        $tree = new Star();
        $tree->generate(2);
    }
}