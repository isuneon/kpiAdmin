<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\admin\ScheduleDay;

class ScheduleDaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$scheduleDays = ScheduleDay::all();
       
        return view('admin/scheduleday/index', ['scheduledays' => $scheduleDays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/scheduleday/create');
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

        $scheduleDay = ScheduleDay::create($inputs);

        if($scheduleDay){
        	return redirect('/ScheduleDay');
        }

        return view('admin/scheduleday/create');
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
        $scheduleDay = ScheduleDay::find($id);
        return view('admin/scheduleday/create', ['ScheduleDay' => $scheduleDay]);
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
        $scheduleDay = ScheduleDay::find($id);

        $inputs = $request->all();
        unset($inputs['_token']);

        $scheduleDay->sender_user = $inputs['sender_user'];
        $scheduleDay->sender_pass = $inputs['sender_pass'];
        $scheduleDay->sender_asunto = $inputs['sender_asunto'];
        $scheduleDay->descripcion = $inputs['descripcion'];
        $scheduleDay->sender_cuerpo = $inputs['sender_cuerpo'];
        $scheduleDay->save();

        if($scheduleDay){
            return redirect('/ScheduleDay');
        }

        return redirect('/ScheduleDay');

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
