<?php

namespace App\Traits;

trait HasActivityLog
{
    public function logActivity(): string
    {
        // $this refers to whichever class uses this trait
        return "[LOG] " . $this->getLogMessage() . " | Timestamp: " . now();
    }
}