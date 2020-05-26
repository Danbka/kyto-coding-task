<?php


namespace Danbka\Kyto\Tests\Unit;


use Danbka\Kyto\Exception\UnsupportedShapeException;
use Danbka\Kyto\Factory\ShapeFactory;
use Danbka\Kyto\Service\Shape\Star;
use Danbka\Kyto\Service\Shape\Tree;
use PHPUnit\Framework\TestCase;

class ShapeFactoryTest extends TestCase
{
    public function testCreateTree()
    {
        $tree = ShapeFactory::create("tree");

        $this->assertInstanceOf(Tree::class, $tree);
    }

    public function testCreateStar()
    {
        $tree = ShapeFactory::create("star");

        $this->assertInstanceOf(Star::class, $tree);
    }

    public function testUnsupportedTypeException()
    {
        $this->expectException(UnsupportedShapeException::class);

        ShapeFactory::create("house");
    }
}