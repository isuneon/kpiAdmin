<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\admin\ScheduleHour;

class ScheduleHoursController extends Controller
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
        $this->notification = ScheduleHour::on($this->connection);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$scheduleHours = ScheduleHour::all();
       
        return view('admin/scheduleHours/index', ['schedulehours' => $scheduleHours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/scheduleHours/create' , ['scheduleHour' => new ScheduleHour()]);
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

        $scheduleHours = ScheduleHour::create($inputs);

        if($scheduleHours){
        	return redirect('/ScheduleHours');
        }

        return view('admin/scheduleHours/create');
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
        $scheduleHour = ScheduleHour::find($id);
        return view('admin/scheduleHours/edit', ['scheduleHour' => $scheduleHour]);
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
        $scheduleHours = ScheduleHour::find($id);

        $inputs = $request->all();
        unset($inputs['_token']);

        $scheduleHours->sender_user = $inputs['sender_user'];
        $scheduleHours->sender_pass = $inputs['sender_pass'];
        $scheduleHours->sender_asunto = $inputs['sender_asunto'];
        $scheduleHours->descripcion = $inputs['descripcion'];
        $scheduleHours->sender_cuerpo = $inputs['sender_cuerpo'];
        $scheduleHours->save();

        if($scheduleHours){
            return redirect('/ScheduleHours');
        }

        return redirect('/ScheduleHours');

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
