<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nibble\Event;

class StoredEvent extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * @param Event $event
     */
    public function __construct(Event $event)
    {
        $payload = $event->getPayload();
        $payload['__class'] = $event::class;
        $this->setAttribute('payload', json_encode($payload));
        $this->setAttribute('created', $event->getCreated());
    }

}
