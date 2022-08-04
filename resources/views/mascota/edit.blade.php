@extends('layouts.app')


@section('content')
<section class="m-3 editarmascota container">
    <article class="row">
      <section class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ">

      
        <section class="card d-flex justify-content-end " style="opacity: 0.80; height: 150%;">
        <form  method="POST" action="{{route('mascotas.update',$mascotavar->id)}}" >
          @method('PUT')  
          @csrf

         <div style="display: flex; justify-content:center;" class="my-1">
            <img class="" src="{{URL::asset('https://images.emojiterra.com/google/android-11/512px/1f436.png')}}" width="40%" height="100%">
        </div>


            <input class="form-control my-3" placeholder="Nombre" type="text" name="nombre_mascota" id="nombre_mascota">
         
            <select class="form-control my-3" name="raza_mascota" id="raza_mascota" value="$id">
                <option selected>Seleccione raza</option>
                 @foreach ($mascotavar as $masco) 
               <option value="{{$masco->id}}">{{$masco->raza_mascota}}</option>
               @endforeach       
            </select>
            <select class="form-control my-3" name="categoria_mascota" id="categoria" value="$id">
                <option  value=""selected>Seleccione categria</option>
                 @foreach ($mascotavar as $masco) 
             <option value="{{$masco->id}}">{{$masco->categoria_mascota}}</option>
             @endforeach
            </select>

            <select class="form-control my-3" name="genero_mascota" id="genero_mascota" value="$id">
                <option  value=""selected> Subir foto</option>
            @foreach ($mascotavar as $masco) 
             <option value="{{$masco->id}}">{{$masco->genero_mascota}}</option>
             @endforeach
            </select>
            <a class="btn btn-danger" href="/mascotas">cancelar</a>
            <button class="btn btn-dark" type="submit">Guardar</button>
           
@endsection
