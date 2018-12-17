<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnoses extends Model
{
    protected $table = "diagnoses";

    public function patient(){
        return $this->belongsTo('App\diagnoses');
    }
}
