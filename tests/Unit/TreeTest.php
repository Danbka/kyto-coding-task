<?php


namespace Danbka\Kyto\Tests\Unit;


use Danbka\Kyto\Exception\UnsupportedSizeException;
use Danbka\Kyto\Service\Shape\Tree;
use PHPUnit\Framework\TestCase;

class TreeTest extends TestCase
{
    public function testUnsupportedSizeException()
    {
        $this->expectException(UnsupportedSizeException::class);

        $tree = new Tree();
        $tree->generate(2);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testGenerateTree(int $size, array $expected)
    {
        $tree = new Tree();
        $result = $tree->generate($size);

        $this->assertSame($expected, $result);
    }

    public function dataProvider()
    {
        return [
            "small tree" => [5, [
                [" ", " ", " ", "+"],
                [" ", " ", " ", "X"],
                [" ", " ", "X", "X", "X"],
                [" ", "X", "X", "X", "X", "X"],
                ["X", "X", "X", "X", "X", "X", "X"],
            ]],
            "medium tree" => [7, [
                [" ", " ", " ", " ", " ", "+"],
                [" ", " ", " ", " ", " ", "X"],
                [" ", " ", " ", " ", "X", "X", "X"],
                [" ", " ", " ", "X", "X", "X", "X", "X"],
                [" ", " ", "X", "X", "X", "X", "X", "X", "X"],
                [" ", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
                ["X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
            ]],
            "large tree" => [11, [
                [" ", " ", " ", " ", " ", " ", " ", " ", " ", "+"],
                [" ", " ", " ", " ", " ", " ", " ", " ", " ", "X"],
                [" ", " ", " ", " ", " ", " ", " ", " ", "X", "X", "X"],
                [" ", " ", " ", " ", " ", " ", " ", "X", "X", "X", "X", "X"],
                [" ", " ", " ", " ", " ", " ", "X", "X", "X", "X", "X", "X", "X"],
                [" ", " ", " ", " ", " ", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
                [" ", " ", " ", " ", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
                [" ", " ", " ", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
                [" ", " ", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
                [" ", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
                ["X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
            ]],
        ];
    }
}