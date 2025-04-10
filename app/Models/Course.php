<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function trainingCenter(){
        return $this->belongsTo(TrainingCenter::class);
    }

    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function apprentices(){
        return $this->hasMany(Apprentice::class);
    }
}
