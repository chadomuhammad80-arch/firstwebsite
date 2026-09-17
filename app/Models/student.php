<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\LoggableInterface;
use App\Traits\HasActivityLog;

class Student extends Model implements LoggableInterface
{
    use HasActivityLog; // Pulls in the logActivity() method

    protected $fillable = ['name', 'email', 'age'];

    // Fulfills the LoggableInterface requirement
    public function getLogMessage(): string
    {
        return "Student record accessed/updated for ID {$this->id}: {$this->name}";
    }

    public function practiceStudents()
    {
        return $this->hasMany(PracticeStudent::class);
    }

    public function getStatusAttribute(): string
    {
        return 'Actitve Student';
    }
}