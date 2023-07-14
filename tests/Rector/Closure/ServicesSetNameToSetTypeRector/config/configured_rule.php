<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

use Rector\Symfony\Rector\Closure\ServicesSetNameToSetTypeRector;

use Rector\Symfony\Tests\ConfigList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(ConfigList::MAIN);

    $rectorConfig->rule(ServicesSetNameToSetTypeRector::class);
};
