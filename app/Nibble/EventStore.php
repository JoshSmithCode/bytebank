<?php

namespace App\Nibble;

use App\Models\StoredEvent as EventModel;
use Nibble\Event;

class EventStore
{
    private array $storedEvents = [];

    public function store(Event $event): void
    {
        $model = new EventModel($event);

        $model->save();

        $this->storedEvents[$model->id] = $event;
    }

    public function getStoredEvents(): array
    {
        return $this->storedEvents;
    }
}
