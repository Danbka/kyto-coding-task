<?php

declare(strict_types=1);

use Danbka\Kyto\Enum\ShapeType;
use Danbka\Kyto\Factory\ShapeFactory;
use Danbka\Kyto\Service\Printer\Browser;
use Danbka\Kyto\Service\Printer\Cli;

require __DIR__.'/vendor/autoload.php';

try {
    // create shape: ShapeType::STAR or ShapeType::TREE
    $shape = ShapeFactory::create(ShapeType::STAR);

    // create printer: Browser or Cli
    $printer = new Browser();

    // run
    $printer->print($shape->generate(5));
} catch (Throwable $exception) {
    print $exception->getMessage();
}