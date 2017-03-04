<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class LoginController extends Controller
{
    
    use AuthenticatesAndRegistersUsers;

    protected $loginView = 'admin.auth.login';

    protected $guard = 'admin';

    protected $redirectTo = null;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::check()) {
    	    return view('home', ['user' => Auth::user()]);
        }
           return view('auth/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        

        $input = $request->all();

        unset($input['_token']);

        $input['password'] = hash('sha256', $input['password']);

        
         (\DB::connection('dbsun')->select('CALL sp_usuario_clientes(?,?)', array($input['email'], $input['password'])));

        if(Auth::attempt($input)){
            
            return view('home', ['user' => Auth::user()]);

        }else{
            return view('auth/login');
        }

        // dd($input);
        
        // return \DB::select('CALL sp_usuario_clientes(?,?)', array($request->email, $request->password));

        // if(Auth::attempt($input)){
            
        	
    	// }
    	// echo "nada";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {   
        // Desconectamos al usuario
        Auth::logout();
        return view('auth/login');
    }

   
}
