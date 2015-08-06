<?php
$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(array(
    'Gaugel\Models' => $config->application->modelsDir,
    'Gaugel\Controllers' => $config->application->controllersDir,
    'Gaugel\Forms' => $config->application->formsDir,
    'Gaugel' => $config->application->libraryDir
));

$loader->register();

// Use composer autoloader to load vendor classes
require_once __DIR__ . '/../../vendor/autoload.php';
