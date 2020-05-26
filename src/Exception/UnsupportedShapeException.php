<?php


namespace Danbka\Kyto\Exception;


use Exception;
use Throwable;

class UnsupportedShapeException extends Exception
{
    public function __construct(string $type, $code = 0, Throwable $previous = null)
    {
        parent::__construct("Type {$type} isn't supported", $code, $previous);
    }
}