<?php

namespace Nibble;

use Illuminate\Container\Container;

abstract class Projections
{
    protected $projections;

    protected abstract function getProjections(Container $container);

    public function __construct(Container $container)
    {
        $this->projections = $this->getProjections($container);
    }

    public function applyEvents(array $events)
    {
        foreach($this->projections as $projection)
        {
            foreach($events as $event)
            {
                $projection->applyEvent($event);
            }
        }
    }
}
