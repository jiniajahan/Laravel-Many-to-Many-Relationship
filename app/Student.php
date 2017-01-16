<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Group;

class Student extends Model
{
    public function groups()
    {
        $this->belongsToMany(Group::class)->withTimestamps();
    }
}
