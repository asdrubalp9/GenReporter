<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\User;
use App\Empresa;
use App\Lugar;
use Auth;

class UserController extends Controller
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
        
        //$users = new User;
        $users = User::all();
        return view('usuarios.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser(){
        
        
        $sitios = Lugar::where('empresa_id', '=', Auth::guard('empresa')->user()->id )->get(); //buscar sitios relacionados

        return view('usuarios.crear')->withSitios($sitios);

    }
    
    public function storeUser(Request $request){
        
        //dd($request);
        
        $this->validate($request, array(
            'name'          => 'required|min:2|max:255',
            'email'         => 'required|email|min:2|max:255',
            'login'         => 'required|min:2|max:20',
            'password'      => 'required|min:2|alpha_num'
            
        ));

        $user = new User;

        $user -> name       = $request->name;
        
        $user -> email      = $request->email;
        $user -> password   = $request->password;
        $user -> telefono   = $request->telefono;
        $user -> login      = $request->login;
        $user -> empresa_id = $request->empresa_id;
        
        $user -> save();

        $user -> Lugares()->sync( $request->lugar_id, false );
        
        
        
        Session::flash('success', 'Se ha agregado el usuario '.$request->name.' '.$request->lastName);

        return redirect()->route('empresas.index');
    }
    public function showUser($id){
        $user = User::find($id);
        return view('usuarios.ver')->withUser($user);
    }
    public function editUser($id){
        $user = User::find($id);
        return view('usuarios.modificar')->withUser($user);
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
        $user = User::find($id);
        //dd($request);
        if( $request->email === $user->email && $request->email === $user->email ){
            
            $this->validate($request, array(
                'name'          => 'required|min:2|max:255',
                'lastName'      => 'required|min:2|max:255',
                'password'      => 'required|min:2|alpha_num'
            
            ));

            $user -> name       = $request->name;
            $user -> lastName   = $request->lastName;
            $user -> password   = $request->password;
            $user -> telefono   = $request->telefono;    
            $user -> save();
            
            Session::flash('success', 'Se han guardado los cambios');

            return redirect()->route('users.show', $user->id);
        
        
        }else{
            Session::flash('danger', 'el correo o el Usurio no pueden ser cambiado');
            return redirect()->route('users.show', $user->id);
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
