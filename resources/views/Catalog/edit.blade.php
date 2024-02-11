@extends('layout.master')
@section('content')


<h2>Edita la película</h2>
<form action="{{route('catalog.update', $pelicula)}}" method="POST">

  @csrf
  @method('put')
  <div class="mb-3 col-8">
    <label class="form-label">Título: 
    <input type="text" class="form-control" name="title" value="{{$pelicula->title}}">
  </label>
  </div>
  @error('title')
  <br>
  <span>*El campo title no puede estar vacío</span>  
  </br> 
  @enderror
 

  <div class="mb-3 col-8">
    <label class="form-label">Año: </label>
    <input type="text"  class="form-control" name="year" value="{{$pelicula->year}}">
  </div>
  @error('year')
  <br>
  <span>*El campo year no puede estar vacío</span>  
  </br> 
  @enderror
 

  <div class="mb-3 col-8">
      <label class="form-label">Director: </label>
      <input type="text" class="form-control" name="director" value="{{$pelicula->director}}">
  </div>
  @error('director')
  <br>
  <span>*El campo director no puede estar vacío</span>  
  </br> 
  @enderror


<div class="mb-3 col-8">
  <label class="form-label">Poster: </label>
  <input type="text" class="form-control" name="poster" value="{{$pelicula->poster}}">
</div>
@error('poster')
<br>
<span>*El campo poster no puede estar vacío</span>  
</br> 
@enderror


  <div class="mb-3 col-8">
      <div class="form-floating">
          <label>Resumen</label>
          <textarea class="form-control" name="synopsis" style="height: 100px">{{$pelicula->synopsis}}</textarea> 
        </div>
  </div>
  @error('synopsis')
  <br>
  <span>*El campo synopsis no puede estar vacío</span>  
  </br> 
  @enderror



  <div class="mb-3 col-8">
      <label class="form-label">Estado: </label>
      <input type="password" class="form-control" name="rented" value="{{$pelicula->rented}}">
  </div>
  @error('rented')
  <br>
  <span>*El campo rented no puede estar vacío</span>  
  </br> 
  @enderror

  

  <button type="submit" class="btn btn-primary">Editar Película</button>
</form>
@stop