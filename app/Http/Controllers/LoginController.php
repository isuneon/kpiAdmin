<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
        $input['password'] = hash('sha256', $input['password']);

    	
        dd(\DB::connection('dbsun')->select('CALL sp_usuario_clientes(?,?)', array($input['email'], $input['password'])));

        if(Auth::attempt($input)){

        }else{
            return view('auth/login');
        }

        // dd($input);
        
        // return \DB::select('CALL sp_usuario_clientes(?,?)', array($request->email, $request->password));

        // if(Auth::attempt($input)){
            
        	
    	// }
    	// echo "nada";
    }

   
}
