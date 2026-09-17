<?php
namespace App\Contracts;

interface LoggableInterface
{
    // Any class that implements this interface must define the log method
    public function getLogMessage(): string;
}