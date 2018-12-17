<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $table ='patients';

    public function patient_records() {
        return $this->hasOne('App\Patient_records');
    }
}
