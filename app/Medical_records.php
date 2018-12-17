<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical_records extends Model
{
    protected $table ="medical_records";

    public function patient() {
        return $this->belongsTo('App\medical_records');
    }
}