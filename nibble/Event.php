<?php

namespace Nibble;

use DateTime;

abstract class Event
{
    protected int $id;

    protected Datetime $created;

    protected array $payload;

    public abstract function getPayload(): array;

    public function __construct()
    {
        $this->created = new DateTime();
    }

    public function getCreated(): string
    {
        return $this->created->format("Y-m-d H:i:s");
    }
}
