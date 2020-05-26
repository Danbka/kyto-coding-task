<?php


namespace Danbka\Kyto\Service\Shape;


use Danbka\Kyto\Enum\ShapeSize;
use Danbka\Kyto\Exception\UnsupportedSizeException;

class Tree implements ShapeInterface
{
    /**
     * @param int $size
     * @return array
     * @throws UnsupportedSizeException
     */
    public function generate(int $size): array
    {
        if (!in_array($size, [ShapeSize::SMALL, ShapeSize::MEDIUM, ShapeSize::LARGE])) {
            throw new UnsupportedSizeException($size);
        }

        $result = [];

        $result[] = array_merge(
            array_fill(0, $size - 2, " "),
            ["+"]
        );

        $x = 1;

        while ($size > 1) {
            $result[] = array_merge(
                array_fill(0, $size - 2, " "),
                array_fill(0, $x, "X")
            );

            $x += 2;
            $size--;
        }

        return $result;
    }
}