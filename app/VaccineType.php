<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaccineType extends Model
{
    protected $table ='vaccine_types';

    public function patient_records() {
        return $this->hasOne('App\Vaccine_type');
    }
}
