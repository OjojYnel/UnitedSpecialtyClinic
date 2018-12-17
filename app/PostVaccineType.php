<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostVaccineType extends Model
{
    protected $table ='vaccine_types';
    protected $fillable = ['vaccine_type_name','vaccine_type_description','vaccine_dose','vaccine_price'];
}
