<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\User;
use App\Empresa;

class UserController extends Controller
{
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
    public function create()
    {
        
        //return view('usuarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

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
