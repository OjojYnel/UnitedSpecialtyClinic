<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = 'payments';

    public function patient() {
        return $this->belongsTo('App\Patient');
    }

    public function service() {
        return $this->hasOne('App\Service');
    }

    public function appointment() {
        return $this->hasOne('App\Appointment');
    }

    public function vaccine() {
        return $this->hasOne('App\Vaccine');
    }

    public function delivery() {
        return $this->hasOne('App\delivery');
    }

    
}
