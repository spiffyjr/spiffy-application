<?php

/*
 * This is the package configuration which gets merged with every other package based on the load order
 * in config/app.php. To determine the configuration key for your package remove the vendor name (e.g., Spiffy) and 
 * Package from the end then replace namespaces with dashes instead.
 * 
 * e.g.,
 * 
 * Spiffy\Framework => framework
 * Spiffy\AsseticPackage => assetic
 * Coolio\AwesomeTricksPackage => awesome-tricks
 */
return [
    'framework' => [
        'twig' => [
            'paths' => [__DIR__ . '/../view']
        ]
    ]
];
