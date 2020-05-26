<?php


namespace Danbka\Kyto\Service\Printer;


class Cli implements PrinterInterface
{
    public function print(array $shape2D): void
    {
        foreach ($shape2D as $key => $row) {
            array_walk($row, function($symbol) {
                print $symbol;
            });

            if ($key !== array_key_last($shape2D)) {
                print PHP_EOL;
            }
        }
    }
}