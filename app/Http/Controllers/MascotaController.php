<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotasvar=Mascota::simplePaginate(7);
        return view('mascota.index',compact('mascotasvar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mascotasvar=Mascota::all();

        return view('mascota.create',compact('mascotasvar'));/* ,compact('TipoDocumento')) */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

      $mascotasvar=new Mascota;
      $mascotasvar->nombre_mascota=$request->nombre_mascota;
      $mascotasvar->raza_mascota=$request->raza_mascota;
      $mascotasvar->categoria_mascota=$request->categoria_mascota;
      $mascotasvar->genero_mascota=$request->genero_mascota;
      $mascotasvar->save();
      return redirect('/mascotas');
     
    }
      
   
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        $mascotasvar = Mascota::all(); 
        return view('mascota.edit',compact('mascota','mascotasvar')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
    
      

        $mascotavar-> nombre_mascota= $request->get('nombre_mascota');
        $mascotavar-> raza_mascota= $request->get('raza_mascota');
        $mascotavar-> categoria_mascota= $request->get('categoria_mascota');
        $mascotavar-> genero_mascota= $request->get('genero_mascota');
        $mascotavar->save();

        return redirect('mascotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $id)
    {
        $mascotasvar=Mascota::find($id);
        $mascotasvar->delete();
        return redirect('/mascotas');
    }
}
