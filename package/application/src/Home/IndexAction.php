<?php

namespace Application\Home;

use Spiffy\Framework\Action\AbstractAction;

/*
 * Instead of controllers Spiffy\Framework uses the idea of single purpose Actions. This reduces the
 * complexity of your controller layer and helps enforce FAT models SKINNY controllers. 
 * 
 * Controllers are called from Spiffy\Dispatch using the __invoke() method. Any parameters available to the
 * route are automatically injected into the __invoke() method. If you add methods to __invoke() that don't
 * exist in the route you will get an exception.
 * 
 * For optional parameters simply set the default value as null, e.g., public function __invoke($id, $optional => null) 
 */
class IndexAction extends AbstractAction
{
    public function __invoke($id = null)
    {
        return [
            'foo' => 'bar',
            'time' => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'],
        ];
    }
}
