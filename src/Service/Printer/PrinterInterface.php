<?php


namespace Danbka\Kyto\Service\Printer;


interface PrinterInterface
{
    public function print(array $shape2D): void;
}