<?php


namespace Danbka\Kyto\Exception;


use Exception;
use Throwable;

class UnsupportedSizeException extends Exception
{
    public function __construct(int $size, $code = 0, Throwable $previous = null)
    {
        parent::__construct("Size {$size} isn't supported", $code, $previous);
    }
}