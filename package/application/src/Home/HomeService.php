<?php
 
namespace Application\Home;

use Spiffy\Inject\Annotation as Injector;

/**
 * @Injector\Component("application.home.home-service")
 */
class HomeService
{
    public function getFoo()
    {
        return 'foo';
    }
}