<?php

use Symfony\Component\ErrorHandler\DebugClassLoader;
use Symfony\Component\Messenger\Transport\Doctrine\DoctrineTransportFactory;

require __DIR__.'/vendor/autoload.php';

DebugClassLoader::enable();
class_exists(DoctrineTransportFactory::class);

