<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class catalogController extends Controller
{
 
    public function getIndex(){
        require_once 'array_peliculas.php';
        return view('catalog.index', ['arrayPeliculas'=> $arrayPeliculas]);
    }
    public function getShow($id){
        require_once 'array_peliculas.php';
        return view('catalog.show', ['arrayPeliculas'=> $arrayPeliculas[$id]]);
    }
    public function getCreate(){
        return view('catalog.create');
    }
    public function getEdit(){
        return view('catalog.edit');
    }
}