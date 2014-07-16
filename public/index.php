<?php

/*
 * This sets the root directory to the application root so we can reference files using their relative paths.
 */
chdir(dirname(__DIR__));

/*
 * If we're using the built-in webserver and we are accessing a static file return
 */
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

/*
 * Composer is a slow version of $deity for PHP. No, really.
 */
if (!file_exists('vendor/autoload.php')) {
    throw new \RuntimeException('Failed to load dependencies: did you run `composer install`');
}

/*
 * Composer also handles auto-loading. Did I mention it's $deity?
 */
$loader = include 'vendor/autoload.php';

/*
 * The big daddy. Does all the things.
 */
$app = new \Spiffy\Framework\Application(include 'config/app.php');
$app
    /*
     * Bootstrap the application. Everything here is handled by \Spiffy\Framework\Plugin\BootstrapPlugin.
     * This includes creating the package manager and loading packages as well as creating
     * required services like the dispatcher, router, request and request.
     */
    ->bootstrap()

    /*
     * Run the application's event life-cycle.
     *
     * route -> dispatch -> render -> respond. All of those events can have error events that are generated
     * from each and the event life-cycle can be short-circuited at anytime by assigning a Response to the
     * ApplicationEvent.
     */
    ->run()

    /*
     * The return result from run() is a Response object which does nothing on its own. In order to
     * display the content, set headers/cookies, etc. we need to send() it.
     */
    ->send();

