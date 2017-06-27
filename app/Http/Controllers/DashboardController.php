<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\models\Role;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        try {
            $this->middleware('auth');
            $this->user = session('user')[0];
            $this->connection = \Crypt::decrypt(session('db'));
            \DB::setDefaultConnection($this->connection);
            
        } catch (Exception $e) {
            return view('auth/login');
        }
    }

   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($this->user);
        $roles = $this->user->roles()->get();
        
        return view('home' , ['user' => $this->user, 'roles' => $roles]);
    }
}
