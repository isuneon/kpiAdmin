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
            return redirect('dashboard/home');
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

        
        $result = (\DB::connection('dbsun')->select('CALL sp_usuario_clientes(?,?)', array($input['email'], $input['password'])));
        $result = $result[0];

        dd($result);

        // // Validaciones
        // if($result->lice_activa == 1){
        //     if($result->lice_activa == 1)
        // }



        if(Auth::attempt($input)){
            
            \Session::push('user', Auth::user());

            return redirect('dashboard/home');

        }else{
            return view('auth/login');
        }

        
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
