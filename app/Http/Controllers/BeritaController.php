<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){
    	
    	$listBerita=Berita::all(); 

    	return view ('berita.index',compact('listBerita'));
    	//return view ('berita.index'->with('data',$listBerita);
    }
}
