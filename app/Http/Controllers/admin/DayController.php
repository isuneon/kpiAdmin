<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Repositories\DayRepository;

class DayController extends Controller
{
    
    // App\Repositories\DayRepository
    protected $dayRepository;



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DayRepository $dayRepository)
    {
        $this->middleware('auth');
        $this->user = session('user')[0];
        $this->connection = \Crypt::decrypt(session('db'));
        \DB::setDefaultConnection($this->connection);
        


        $this->dayRepository = $dayRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$days = $this->dayRepository->all();
       
        return view('admin/day/index', compact("days"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $day = $this->dayRepository->newInstance();
        return view('admin/day/create', compact("day"));
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

        $day =  $this->dayRepository->create($inputs);

        if($day){
            \Session::flash("day", trans('validation.form_created'));
            $days = $this->dayRepository->all();
            return view('admin/day/index', compact("days"));
        }

        return view('admin/day/create');
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
        $day =  $this->dayRepository->find($id);
        return view('admin/day/edit', compact("day"));
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
        $inputs = $request->all();

        $day =  $this->dayRepository->find($id);
        $this->dayRepository->update($day, $inputs);

        if($day){
            \Session::flash("day", trans('validation.form_edited'));
            $days = $this->dayRepository->all();
            return view('admin/day/index', compact("days"));
        }

        return redirect('/day');

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
