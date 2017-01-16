<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Student;

class Group extends Model
{
  public function students()
  {
      $this->belongsToMany(Student::class)->withTimestamps();
  }
}
