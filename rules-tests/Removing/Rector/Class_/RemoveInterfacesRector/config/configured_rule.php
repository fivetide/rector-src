<?php

declare(strict_types=1);

use Rector\Removing\Rector\Class_\RemoveInterfacesRector;
use Rector\Tests\Removing\Rector\Class_\RemoveInterfacesRector\Source\SomeInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(RemoveInterfacesRector::class)
        ->call('configure', [[
            RemoveInterfacesRector::INTERFACES_TO_REMOVE => [SomeInterface::class],
        ]]);
};
