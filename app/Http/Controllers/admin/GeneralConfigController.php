<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\admin\Config;

class GeneralConfigController extends Controller
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
        $this->config = Config::on($this->connection)->get();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = $this->config->first();
        return view('admin/config/create', ['config' => $config]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $config = $this->config->find($id);
        return view('admin/config/create', ['config' => $config]);
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
        $config = $this->config->find($id);

        $inputs = $request->all();
        unset($inputs['_token']);

        $config->defa_cod_proveedor = $inputs['defa_cod_proveedor'];
        $config->defa_cod_tip_banco = $inputs['defa_cod_tip_banco'];
        $config->defa_costo = $inputs['defa_costo'];
        $config->defa_precio = $inputs['defa_precio'];
        $config->defa_pmaxgan = $inputs['defa_pmaxgan'];
        $config->defa_p_est_cos = $inputs['defa_p_est_cos'];
        $config->defa_language = $inputs['defa_language'];
        $config->defa_moneda = $inputs['defa_moneda'];
        $config->alert_mont_odp = $inputs['alert_mont_odp'];
        $config->alert_mont_odc = $inputs['alert_mont_odc'];
        $config->alert_mont_com = $inputs['alert_mont_com'];
        $config->alert_mont_fact = $inputs['alert_mont_fact'];
        $config->alert_mont_cotz = $inputs['alert_mont_cotz'];
        $config->save();

        if($config){
            return redirect('/dashboard/home');
        }

        return redirect('/dashboard/home');
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
