<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
	

	/**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'admin_config';


	public $timestamps = false;


	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'defa_cod_proveedor',
		'defa_cod_tip_banco',
		'defa_costo',
		'defa_precio',
		'defa_pmaxgan',
		'defa_p_est_cos',
		'defa_language',
		'defa_moneda',
		'alert_mont_odp',
		'alert_mont_odc',
		'alert_mont_com',
		'alert_mont_fact',
		'alert_mont_cotz'
    ];


	
}
