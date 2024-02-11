<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;


use Illuminate\Http\Request;

class catalogController extends Controller
{

    public function getIndex()
    {
        $peliculas = Pelicula::all();
        return view('catalog.index', ['peliculas' => $peliculas]);
    }
    public function getShow($id)
    {
        $pelicula = Pelicula::find($id);
        if (!$pelicula) {
            abort(404);
        }
        return view('catalog.show', ['arrayPeliculas' => $pelicula]);
    }
    public function getCreate()
    {
        return view('catalog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required',
            'director' => 'required',
            'poster' => 'required',
            'synopsis' => 'required',
            'rented' => 'required'
        ]);

        //guardar datos en el form
        $pelicula = new Pelicula();

        $pelicula->title = $request->title;
        $pelicula->year = $request->year;
        $pelicula->director = $request->director;
        $pelicula->poster = $request->poster;
        $pelicula->synopsis = $request->synopsis;
        $pelicula->rented = $request->rented;


        $pelicula->save();
        //return redirect()->route('cursos.index');
        //para que te redirija al curso que acabas de crear seria asi
        return redirect()->route('catalog.show', $pelicula);
    }

    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        return view('catalog.edit', ['pelicula' => $pelicula]);
    }

    public function update(Request $request, Pelicula $pelicula)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required',
            'director' => 'required',
            'poster' => 'required',
            'synopsis' => 'required',
            'rented' => 'required'
        ]);

        $pelicula->title = $request->title;
        $pelicula->year = $request->year;
        $pelicula->director = $request->director;
        $pelicula->poster = $request->poster;
        $pelicula->synopsis = $request->synopsis;
        $pelicula->rented = $request->rented;


        $pelicula->save();
        return redirect()->route('catalog.show', $pelicula);
    }
}
