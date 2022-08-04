<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use PDF;

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



    public function pdf()
    {
        
        $mascotasvar=Mascota::Paginate();

        $pdf =PDF::loadView('mascota.pdf',['mascotasvar'=>$mascotasvar]);
        // return $pdf->stream(); con navegador

        return $pdf->download('reporte__Mascotas.pdf');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mascotasvar=Mascota::all();

        return view('mascota.create',compact('mascotasvar'));
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
    public function edit($id)
    {
        $mascotavar = Mascota::find($id); 
        return view('mascota.edit',compact('mascotavar')); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $validar = Validator::make ($request->all(),[
            'nombre_mascota'=>'required',
            'raza_mascota'=>'required',
            'categoria_mascota'=>'required',
            'genero_mascota'=>'required'
        ]);
        if(!$validar->fails()){
        $mascotasvar=Masctota::find($id);
        $mascotasvar-> nombre_mascota= $request->nombre_mascota;
        $mascotasvar-> raza_mascota= $request->raza_mascota;
        $mascotasvar-> categoria_mascota= $request->categoria_mascota;
        $mascotasvar-> genero_mascota= $request->genero_mascota;
        $mascotasvar->save();

        }
        return redirect('mascotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mascotasvar=Mascota::find($id);
        $mascotasvar->delete();
        return redirect('/mascotas');
    }
}
