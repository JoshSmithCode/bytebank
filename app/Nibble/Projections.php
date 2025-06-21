<?php

namespace App\Nibble;

use Illuminate\Container\Container;
use Nibble\Projections as AbstractProjections;

class Projections extends AbstractProjections
{
    protected function getProjections(Container $container): array
    {
        return [
            $container->get(WebProjection::class),
        ];
    }
}
