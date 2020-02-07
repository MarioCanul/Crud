<?php

namespace App\Http\Controllers;

use App\ReporteGasto;
use Illuminate\Http\Request;

class ReporteGastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Reportegasto::all();

        return view('reporte',['Setdata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $route = "/datos/reporte";
        //ar_dump($request);
        $var = new ReporteGasto();
        $var->Descripcion = $request->des;
        
        $var->save();
        return redirect($route);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReporteGasto  $reporteGasto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reporte =  ReporteGasto::findOrFail($id);
        $gastos = $reporte->gastos()->get();
        return view('Detalles',['Setdata' => $gastos, 'reporte' => $reporte]);

    }
    // public function show($id)
    // {
    //     $dato = Datostabla::reporteGastos()->find($id); 
    //     $reporte =  ReporteGasto::findOrFail($id);
    //     $gastos = $reporte->gastos()->get();
    //      return view('Detalles',['Setdata' => $dato ]);
    //     // return dd($dato);
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReporteGasto  $reporteGasto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $route ="/reporte";
         $dato =  ReporteGasto::findOrFail($id);
               
        return view('modificarDetalles',['var' => $dato]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReporteGasto  $reporteGasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $route ="/datos/reporte";
        $var = ReporteGasto::findOrFail($id);
        $var->Descripcion = $request->des;
       
        $var->save();
        return redirect($route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReporteGasto  $reporteGasto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $route ="/datos/reporte";
        $dato =  ReporteGasto::findOrFail($id);
        $dato->delete();
          return redirect($route);
    }
}
