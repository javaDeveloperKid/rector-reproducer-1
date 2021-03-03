<?php

use Rector\Core\Configuration\Option;
use Rector\Core\ValueObject\PhpVersion;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    // paths to refactor; solid alternative to CLI arguments
    $parameters->set(Option::PATHS, [
        __DIR__ . '/src/Entity/Document.php',
        __DIR__ . '/src/Service/MyService.php',
        __DIR__ . '/src/EventSubscriber/RequestLoggerEventSubscriber.php'
    ]);
    $parameters->set(Option::SETS, [\Rector\Set\ValueObject\SetList::PHP_74]);

    // Rector relies on autoload setup of your project; Composer autoload is included by default; to add more:
    $parameters->set(Option::AUTOLOAD_PATHS, [
        // autoload specific file
        __DIR__ . '/vendor/autoload.php',
    ]);

    // auto import fully qualified class names? [default: false]
    $parameters->set(Option::AUTO_IMPORT_NAMES, true);

    // skip root namespace classes, like \DateTime or \Exception [default: true]
    $parameters->set(Option::IMPORT_SHORT_CLASSES, false);

    // skip classes used in PHP DocBlocks, like in /** @var \Some\Class */ [default: true]
//    $parameters->set(Option::IMPORT_DOC_BLOCKS, false);
};