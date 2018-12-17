<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_records extends Model
{
    protected $table ="patient_records";

    public function patient() {
        return $this->belongsTo('App\Patient');
    }
}
