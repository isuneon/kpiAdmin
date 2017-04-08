<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\admin\ScheduleDay;

class ScheduleDaysController extends Controller
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
        $this->scheduleDay = ScheduleDay::on($this->connection);
    }



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
        return view('admin/scheduleday/create', ['scheduleDay' => new ScheduleDay()]);
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
        	return redirect('dashboard/scheduleDay');
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
        return view('admin/scheduleday/edit', ['scheduleDay' => $scheduleDay]);
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

        $scheduleDay->id_horarios = $inputs['id_horarios'];
        $scheduleDay->id_dia = $inputs['id_dia'];
        
        $scheduleDay->save();

        if($scheduleDay){
            return redirect('dashboard/scheduleDay');
        }

        return redirect('dashboard/scheduleDay');

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
