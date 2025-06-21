<?php

namespace Nibble;

abstract class Projection
{
    public abstract function applyEvent(Event $event);
}
