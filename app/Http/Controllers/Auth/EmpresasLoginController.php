<?php



namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;



class EmpresasLoginController extends Controller {
    

    public function __construct()
    {
      $this->middleware('guest:empresa');
    }
    //*/
    public function showLoginForm(){
        return view('empresas.ingresar');
    }
    
    public function login(Request $request){
        
        
        
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  =>'required|min:6'
        ]);

        //attempting login
        
        if(Auth::guard('empresa')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember )){
            return redirect()->intended(route('empresas.index'));
        }
        

        return redirect()->back()->withInput($request->only('email','remember') );
        // */   
    } 
}
