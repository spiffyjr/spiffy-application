<?php

namespace Application\Home;

use Spiffy\Framework\Action\AbstractAction;

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
