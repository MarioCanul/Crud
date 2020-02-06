<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datostabla;

class DatostablaController extends Controller
{
    // public function __construct(){
    //     //$this->middleware('verified');

    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Datostabla::all();

        return view('data',['Setdata' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $route = "/datos";
        //ar_dump($request);
        $var = new Datostabla();
        $var->Nombre = $request->Nombre;
        $var->Costo = $request->Costo;
        $var->save();
        return redirect($route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $route ="/datos";
        $dato =  Datostabla::findOrFail($id);
          
       
        return view('modificar',['var' => $dato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {
        var_dump($id);
        $route ="/datos";
        $var = Datostabla::findOrFail($id);
        $var->Nombre = $request->Nombre;
        $var->Costo = $request->Costo;
        $var->save();
        return redirect($route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $route ="/datos";
     $dato =  Datostabla::findOrFail($id);
     $dato->delete();
       return redirect($route);
    }
}
