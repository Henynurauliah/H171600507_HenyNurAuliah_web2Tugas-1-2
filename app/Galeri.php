<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='artikel';

    	protected $fillable=['nama','user_id'];
}
