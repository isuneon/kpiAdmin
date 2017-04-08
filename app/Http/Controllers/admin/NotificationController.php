<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\admin\Notification;

class NotificationController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->user = session('user')[0];
        $this->connection = \Crypt::decrypt(session('db'));
        \DB::setDefaultConnection($this->connection);
        $this->notification = Notification::on($this->connection);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$notifications = $this->notification->get()->all();
       
        return view('admin/notification/index', ['notifications' => $notifications, 'user' => $this->user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/notification/create', ['notification' => New Notification()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    	$inputs = $request->all();
    	unset($inputs['_token']);


        $notification = Notification::on($this->connection)->first();
        

    // $notification->setConnection($this->connection);

        // $notification = $this->notification;
    $data = Notification::on($this->connection)->first()->create($inputs);

        dd($data);

        if($notification){
        	return redirect('dashboard/notification');
        }

        return view('admin/notification/create');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notification = $this->notification->find($id);
        $roles = $this->user->roles()->get();
        return view('admin/notification/create', ['notification' => $notification, 'user' => $this->user, 'roles' => $roles]);
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
        $notification = $this->notification->find($id);

        $inputs = $request->all();
        unset($inputs['_token']);

        $notification->sender_user = $inputs['sender_user'];
        $notification->sender_pass = $inputs['sender_pass'];
        $notification->sender_asunto = $inputs['sender_asunto'];
        $notification->descripcion = $inputs['descripcion'];
        $notification->sender_cuerpo = $inputs['sender_cuerpo'];
        $notification->save();

        if($notification){
            return redirect('/notification');
        }

        return redirect('/notification');

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
