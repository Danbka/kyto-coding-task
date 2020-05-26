<?php


namespace Danbka\Kyto\Service\Shape;


interface ShapeInterface
{
    public function generate(int $size): array;
}