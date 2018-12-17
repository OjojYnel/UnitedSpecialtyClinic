<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccines extends Model
{

	protected $table = 'vaccine_lists';
	
    protected $fillable = ['quantity','vaccine_name','vaccine_lot_number','reason','status','vaccine_expiration_date','vaccine_types_id'];
    
   
}







