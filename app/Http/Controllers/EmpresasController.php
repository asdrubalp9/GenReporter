<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\User;
use App\Empresa;
use App\Lugar;
use App\TipoReporte;


class EmpresasController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       /*
    public function __construct()
    {
        $this->middleware('auth:empresa',['except'=>'create','store']);
    }
    //*/
    public function index()
    {

        $var = Auth::guard('empresa')->user()->id ;
        
        $sitios = Lugar::where('empresa_id', '=', $var )->Paginate(5);
        
        $users = User::where('empresa_id', '=', $var )->orderBy('id','DESC')->Paginate(5);
        
        $tiporeportes = TipoReporte::where('empresa_id', '=', $var )->orderBy('id','DESC')->Paginate(5);
        
        return view('empresas.index')->withSitios($sitios)->withUsers($users)->withTipos($tiporeportes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
        return view('empresas.crear');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'          => 'required|min:2|max:255',
            'telefono'      => 'required|min:2|max:255',
            'email'         => 'required|email|min:2|max:255',
            'password'      => 'required|min:2|alpha_num'
            
        ));

        $empresa = new Empresa;
        
        $pass= $request->password;

        $empresa -> name       = $request->name;
        $empresa -> telefono   = $request->telefono;
        $empresa -> email      = $request->email;
        $empresa -> direccion  = $request->direccion;
        $empresa -> password   = bcrypt($pass);
        $empresa -> activo     = 1;
        
        
        $empresa -> save();
        Session::flash('success', 'Se ha agregado la empresa '.$request->name );
        return redirect()->route('empresas.index' );
        
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
        $empresa = Empresa::find($id);

        return view('empresas.ver')->withEmpresa($empresa);

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
        $empresa = Empresa::find($id);

        return view('empresas.modificar')->withEmpresa($empresa);
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
        // revisar qe hace esto? 
        $empresa = Empresa::find($id);
        //dd($request);
        if( $request->email === $empresa->email ){
            
            $this->validate($request, array(
                'name'          => 'required|min:2|max:255',
                'direccion'      => 'required|min:2|max:255',
                'telefono'      => 'required|min:2|max:255',
                'password'      => 'required|min:2|alpha_num'
            
            ));

            $empresa -> name       = $request->name;
            $empresa -> direccion   = $request->direccion;
            $empresa -> password   = $request->password;
            $empresa -> telefono   = $request->telefono;    
            $empresa -> save();
            
            Session::flash('success', 'Se han guardado los cambios');

            return redirect()->route('empresas.show', $empresa->id);
        
        
        }else{
            Session::flash('danger', 'el correo o el Usurio no pueden ser cambiado');
            return redirect()->route('empresas.show', $empresa->id);
        }
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

