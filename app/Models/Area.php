<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }

}
