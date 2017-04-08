<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\admin\Emails;

class EmailsController extends Controller
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
        $this->emails = Emails::on($this->connection);
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = $this->emails->get()->all();
        return view('admin/email/index', ['emails' => $emails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/email/create', ['email'=> new Emails()]);
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

        $email = Emails::create($inputs);

        if($email){
            return redirect('/email');
        }

        return view('admin/email/create');
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
        $email = Emails::find($id);
        return view('admin/email/edit', ['email' => $email]);
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
        $email = Emails::find($id);

        $inputs = $request->all();
        unset($inputs['_token']);

        $email->to_email = $inputs['to_email'];
        $email->cc_email = $inputs['cc_email'];
        $email->bcc_email = $inputs['bcc_email'];
        $email->id_notifi = 1;
      
        $email->save();

        if($email){
            return redirect('/email');
        }

        return redirect('/email');
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
