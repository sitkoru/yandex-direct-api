<?php
use Doctrine\Common\Annotations\AnnotationRegistry;

error_reporting(E_ALL);
ini_set("display_errors", "on");
$loader = require __DIR__ . '/../vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);

require_once __DIR__ . '/constants.php';
