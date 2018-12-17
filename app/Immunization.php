<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    protected $table ="immunizations";

    public function patient(){
        return $this->belongsTo('App\immunization');
    }
}
