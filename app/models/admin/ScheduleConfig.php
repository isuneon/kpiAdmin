<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class ScheduleConfig extends Model
{
    

	 public $timestamps = false;

    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'admin_horarios_config';


	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'name',
                'descripcion',
                
    ];
}
