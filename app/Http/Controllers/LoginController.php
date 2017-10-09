<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
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

        

        $validator = \Validator::make($request->all(), [
            'password'  => 'required',
            'email'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('auth/login')
                        ->withErrors($validator);
        }




        // try {
            $input['password'] = strtoupper(hash('sha256', $input['password']));


            $result = (\DB::connection('dbsun')->select('CALL sp_usuario_clientes(?,?)', array($input['email'], $input['password'])));
            
            // dd($result);


            if(count($result)>0){
                $result = $result[0];
                // // Validaciones
                if($result->cliente_activo == 1){
                    if($result->lice_activa == 1){
                        if(date('Y-m-d H:m:s') > $result->fe_fin){
                            if($result->co_pro == 'KPIADMIN'){
                                // Inicio de session
                                if(Auth::attempt($input)){

                                    $user = User::on($result->dw_dbname)->where('email', '=', $result->email)->get();
                                    
                                   
                                    if($user->count() > 0){
                                        Session::put('user', $user);
                                        Session::put('db', Crypt::encrypt($result->dw_dbname));
                                        \DB::setDefaultConnection($result->dw_dbname);
                                        return redirect('dashboard/home');
                                    }else{
                                        return view('auth/login');
                                    }
                                }else{
                                    Session::flash("login", trans('validation.code_invalid'));dd(1);
                                }
                            }
                            else
                                {Session::flash("login", trans('validation.code_invalid'));dd(2);}
                        }
                        else
                            {Session::flash("login", trans('validation.date_expired'));dd(3);}
                    }
                    else
                        {Session::flash("login", trans('validation.license_expired'));dd(4);}
                }
                else
                    {Session::flash("login", trans('validation.client_inactive'));dd(5);}
            }
            else
                {Session::flash("login", trans('validation.client_unknown'));dd(6);}

        // } catch (\Exception $e) {
        //     Session::flash("login", trans('validation.unknown'));
        //     return view('auth/login');

        // }

        // return to de view login, if some validation is wrong
        // return view('auth/login');
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {   
        // Desconectamos al usuario
        try {
            Auth::logout();
            Session::flush();
        } catch (Exception $e) {
            return redirect('/');
        }
            return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forget(Request $request)
    {


        $input = $request->all();
        unset($input['_token']);

        

        $validator = \Validator::make($request->all(), [
            'email'      => 'required|exists:dbsun.usuario_clientes,email',
        ]);

        if ($validator->fails()) {
            Session::flash("login", trans('auth.failed'));
           
        }




        try {
            // Envcio de email
        } catch (\Exception $e) {
            Session::flash("login", trans('validation.unknown'));
            return view('auth/login');

        }

        // return to de view login, if some validation is wrong
        return view('auth/login');
        


    }

   
}
