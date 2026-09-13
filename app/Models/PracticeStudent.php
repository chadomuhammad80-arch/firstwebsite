<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeStudent extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'course',
        'age',
    ];

public function student()
{
return $this->belongsTo(Student::class);

}

}
