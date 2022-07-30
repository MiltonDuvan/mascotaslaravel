@extends('layouts.app');

@section('content')

  <section class="m-3 container">
<section class="row">
<form method="POST" action="{{route('mascotas.index')}}">
    <section style="display: flex; justify-content: center;">
        <img style="border-radius: 40px" src="https://png.pngtree.com/png-clipart/20201225/ourlarge/pngtree-corgi-pet-puppy-puppies-animal-canine-dog-beast-cartoon-png-image_2618339.jpg" width="20%" alt="">
        </section>
    <section class="" style="display: flex; justify-content:space-between"> 
    <section class=""> 
        <a class="btn btn-primary" href="/mascotas/create">Mascota nueva</a>
    </section>



<div class="btn-group">
    <input type="text"  name="buscar" class="form-control">
    <button type="submit" class="btn btn-primary">BUSCAR</button>
</div>
</section>
</form>

<section class="container">

<section class="row">
    
    <section class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h2 style="padding: 1%; font:bold; text-align: center">Listado de Mascotas</h2>
    <table class="table table-striped">
      <thead class="">
        <tr class="font-weight-bold " >
          <th scope="col">#</th>
          <th scope="col">Nombres</th>
          <th scope="col">Raza</th>
          <th scope="col">Categoria</th>
          <th scope="col">Genero</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($mascotasvar as $masco)
        <tr>
          <th>{{$masco->id}}</th>
          <th>{{$masco->nombre_mascota}}</th>
          <th>{{$masco->raza_mascota}}</th>
          <th>{{$masco->categoria_mascota}}</th>
          <th>{{$masco->genero_mascota}}</th>

          <th>
            
            <form action="{{route ('mascotas.destroy',$masco->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Borrar</button>
                <a class="btn btn-primary m-1" href="/mascotas/{{$masco->id}}/edit">Editar</a>
        </form>
          </th>
        </tr>
        
        @endforeach
      </tbody>
    </section>
  </section>
</section>
</section>
</section>
@endsection