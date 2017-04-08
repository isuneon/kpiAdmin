<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\admin\ScheduleConfig;

class ScheduleConfigController extends Controller
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
        $this->scheduleConfig = ScheduleConfig::on($this->connection);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$scheduleConfigs = ScheduleConfig::all();
       
        return view('admin/scheduleconfig/index', ['scheduleconfigs' => $scheduleConfigs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/scheduleconfig/create');
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

        $scheduleConfig = ScheduleConfig::create($inputs);

        if($scheduleConfig){
        	return redirect('/ScheduleConfig');
        }

        return view('admin/scheduleconfig/create');
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
        $scheduleConfig = ScheduleConfig::find($id);
        return view('admin/scheduleconfig/create', ['scheduleConfig' => $scheduleConfig]);
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
        $scheduleConfig = ScheduleConfig::find($id);

        $inputs = $request->all();
        unset($inputs['_token']);

        $scheduleConfig->sender_user = $inputs['sender_user'];
        $scheduleConfig->sender_pass = $inputs['sender_pass'];
        $scheduleConfig->sender_asunto = $inputs['sender_asunto'];
        $scheduleConfig->descripcion = $inputs['descripcion'];
        $scheduleConfig->sender_cuerpo = $inputs['sender_cuerpo'];
        $scheduleConfig->save();

        if($scheduleConfig){
            return redirect('/ScheduleConfig');
        }

        return redirect('/ScheduleConfig');

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
