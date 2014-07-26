<?php

/*
 * Documentation on the router component itself can be found at https://github.com/spiffyjr/spiffy-route.
 * 
 * Routes take the form:
 *     'route_name' => ['route_path', 'Action/Service Name', ['additional options']]
 * 
 * For more details on what path options are available refer to the Spiffy\Route documentation. 
 */
return [
    'home' => ['/', 'Application\Home\IndexAction']
];
