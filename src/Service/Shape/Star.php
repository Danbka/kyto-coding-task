<?php


namespace Danbka\Kyto\Service\Shape;


use Danbka\Kyto\Enum\ShapeSize;
use Danbka\Kyto\Exception\UnsupportedSizeException;

class Star implements ShapeInterface
{
    /**
     * @param int $size
     * @return string[][]
     * @throws UnsupportedSizeException
     */
    public function generate(int $size): array
    {
        switch ($size) {
            case ShapeSize::SMALL:
                return $this->generateSmall();
                break;
            case ShapeSize::MEDIUM:
                return $this->generateMedium();
                break;
            case ShapeSize::LARGE:
                return $this->generateLarge();
                break;
            default:
                throw new UnsupportedSizeException($size);
                break;
        }
    }

    private function generateSmall()
    {
        return [
            [" ", " ", " ", "+"],
            [" ", " ", " ", "X"],
            ["+", "X", "X", "X", "X", "X", "+"],
            [" ", " ", " ", "X"],
            [" ", " ", " ", "+"],
        ];
    }

    private function generateMedium()
    {
        return [
            [" ", " ", " ", " ", " ", "+"],
            [" ", " ", " ", " ", " ", "X"],
            [" ", " ", " ", "X", "X", "X", "X", "X"],
            ["+", "X", "X", "X", "X", "X", "X", "X", "X", "X", "+"],
            [" ", " ", " ", "X", "X", "X", "X", "X"],
            [" ", " ", " ", " ", " ", "X"],
            [" ", " ", " ", " ", " ", "+"],
        ];
    }

    private function generateLarge()
    {
        return [
            [" ", " ", " ", " ", " ", " ", " ", " ", "+"],
            [" ", " ", " ", " ", " ", " ", " ", " ", "X"],
            [" ", " ", " ", " ", " ", " ", " ", "X", "X", "X"],
            [" ", " ", " ", " ", " ", "X", "X", "X", "X", "X", "X", "X"],
            [" ", " ", " ", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
            ["+", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "+"],
            [" ", " ", " ", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X", "X"],
            [" ", " ", " ", " ", " ", "X", "X", "X", "X", "X", "X", "X"],
            [" ", " ", " ", " ", " ", " ", " ", "X", "X", "X"],
            [" ", " ", " ", " ", " ", " ", " ", " ", "X"],
            [" ", " ", " ", " ", " ", " ", " ", " ", "+"],
        ];
    }
}