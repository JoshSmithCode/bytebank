<?php

namespace App\Http\Middleware;

use App\Nibble\Projections;
use App\Nibble\EventStore;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProjectStoredEvents
{
    private EventStore $eventStore;

    private Projections $projections;

    /**
     * @param EventStore $eventStore
     * @param Projections $projections
     */
    public function __construct(EventStore $eventStore, Projections $projections)
    {
        $this->eventStore = $eventStore;
        $this->projections = $projections;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $storedEvents = $this->eventStore->getStoredEvents();

        $this->projections->applyEvents($storedEvents);

        return $response;
    }
}
