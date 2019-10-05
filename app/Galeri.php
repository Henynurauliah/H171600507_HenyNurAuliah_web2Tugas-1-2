<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';

    	protected $fillable=[
    		'id','nama','keterangan','path','create_at','update_at','users_id','kategori_galeri_id'
    	];

    	protected $casts=[ ];
}
