<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    public function index(){
    	
    	$listPengumuman=Pengumuman::all(); 

    	return view ('pengumuman.index',compact('listPengumuman'));
    	//return view ('pengumuman.index'->with('data',$listPengumuman);
    }
}
