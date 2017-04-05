<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Crypt;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\models\admin\User;


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

        // dd($result);


        // // Validaciones
        if($result->cliente_activo == 1){
            if($result->lice_activa == 1){
                if(date('Y-m-d H:m:s') > $result->fe_fin){
                    if($result->co_pro == 'KPIADMIN'){
                        // Inicio de session
                        if(Auth::attempt($input)){
                            
                            // dd(Auth::user());

                            // $user = new User;
                            $user = User::on($result->dw_dbname)->where('co_cli', '=', $result->co_cli)->get();

                            // dd($user);
                            // $user->setConnection($result->dw_dbname);
                            // $user->newQuery()->find(1);
                           
                            if($user->count() > 0){

                                \Session::put('user', $user);
                                \Session::put('db', Crypt::encrypt($result->dw_dbname));
                                return redirect('dashboard/home');

                            }else{
                                return view('auth/login');
                            }
                        }else{
                            return view('auth/login');
                        }
                    }
                    dd('Codigo producto malo');
                }
                dd('Fecha vencida');
            }
            dd('Licensia vencida');
        }
        dd('cliente inactivo');


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
        \Session::flush();
        return redirect('/');
    }

   
}
