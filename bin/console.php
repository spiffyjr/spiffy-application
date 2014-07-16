<?php

chdir(dirname(__DIR__));

if (!file_exists('vendor/autoload.php')) {
    throw new \RuntimeException('Failed to load dependencies: did you run `composer install`');
}

include 'vendor/autoload.php';

/*
 * Get our schmexy Console Application. Internally it creates the same Application as a regular web
 * request for bootstrapping.
 */
$console = new \Spiffy\Framework\ConsoleApplication(include 'config/app.php');

/*
 * Add our custom console plugin that runs the bootstrapConsole() method on each ApplicationPackage. You can
 * remove this if you want to load commands some other way.
 */
$console->getApplication()->events()->plug(new \Spiffy\Framework\Plugin\BootstrapConsolePlugin($console));

/*
 * Run the Symfony console application.
 */
$console->run();

