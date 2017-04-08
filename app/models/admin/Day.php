<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
   
	public $timestamps = false;
    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'admin_dia';


	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'dia',
    ];


}
