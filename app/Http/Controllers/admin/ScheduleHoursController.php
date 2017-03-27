<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\admin\ScheduleHours;

class ScheduleHoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$scheduleHours = ScheduleHours::all();
       
        return view('admin/schedulehours/index', ['schedulehours' => $scheduleHours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/schedulehours/create');
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

        $scheduleHours = ScheduleHours::create($inputs);

        if($scheduleHours){
        	return redirect('/ScheduleHours');
        }

        return view('admin/schedulehours/create');
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
        $scheduleHours = ScheduleHours::find($id);
        return view('admin/schedulehours/create', ['ScheduleHours' => $scheduleHours]);
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
        $scheduleHours = ScheduleHours::find($id);

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
