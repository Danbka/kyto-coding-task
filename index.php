<?php

declare(strict_types=1);

use Danbka\Kyto\Enum\ShapeSize;
use Danbka\Kyto\Enum\ShapeType;
use Danbka\Kyto\Factory\ShapeFactory;
use Danbka\Kyto\Service\Printer\Browser;
use Danbka\Kyto\Service\Printer\Cli;

require __DIR__.'/vendor/autoload.php';

try {
    // create shape: ShapeType::STAR or ShapeType::TREE
    $shape = ShapeFactory::create(ShapeType::STAR);

    // select printer
    $printer = (php_sapi_name() === "cli") ? new Cli() : new Browser();

    // client can get random size or set particular
    $sizes = [
        ShapeSize::SMALL,
        ShapeSize::MEDIUM,
        ShapeSize::LARGE,
    ];

    $size = $sizes[array_rand($sizes)];

    $printer->print($shape->generate($size));
} catch (Throwable $exception) {
    print $exception->getMessage();
}