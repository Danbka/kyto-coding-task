<?php


namespace Danbka\Kyto\Factory;


use Danbka\Kyto\Enum\ShapeType;
use Danbka\Kyto\Exception\UnsupportedShapeException;
use Danbka\Kyto\Service\Shape\ShapeInterface;
use Danbka\Kyto\Service\Shape\Star;
use Danbka\Kyto\Service\Shape\Tree;

class ShapeFactory
{
    /**
     * @param string $type
     * @return ShapeInterface
     * @throws UnsupportedShapeException
     */
    public static function create(string $type): ShapeInterface
    {
        switch ($type) {
            case ShapeType::TREE:
                $shape = new Tree();
                break;
            case ShapeType::STAR:
                $shape = new Star();
                break;
            default:
                throw new UnsupportedShapeException($type);
                break;
        }

        return $shape;
    }
}