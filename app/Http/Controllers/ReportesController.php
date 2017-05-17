<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Empresa;
use App\Lugar;
use App\TipoReporte;
use Auth;

class ReportesController extends Controller
{
    public function __construct(){
        $this -> middleware('auth:empresa');
        //$this->middleware('auth:empresa',['except'=>'create','store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function createType()
    {
        return view('reportes.crearTipo');
    }
    public function submitType(Request $request ){
        $this->validate($request, array(
            'titulo'          => 'required|min:2|max:255',
            'descripcion'      => 'required|min:2|max:255'            
        ));

        $tipoReporte = new TipoReporte;

        $tipoReporte-> titulo = $request -> titulo;
        $tipoReporte-> descripcion = $request -> descripcion;

        $empresa = Empresa::find( Auth::guard('empresa')->user()->id );
        $empresa -> Tipo_Reportes()->save($tipoReporte);
        
        Session::flash('success', 'Se ha guardado el tipo de reporte '.$request->titulo );
        return redirect()->route('empresas.index' );


    }

    public function create()
    {
        //
        $tipos = TipoReporte::where( 'empresa_id', Auth::guard('empresa')->user()->id  )->get();
        $sitios = Lugar::where( 'empresa_id', Auth::guard('empresa')->user()->id  )->get();
        

        return view('reportes.crear' )->withTipos($tipos)->withSitios($sitios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
