<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
  protected $fillable= [
    'name',
    'email',
    'age',
  ];

public function practiceStudents()
{
    return $this->hasMany(PracticeStudent::class);
}
}

