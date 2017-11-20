<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class ScheduleDay extends Model
{
    

	 public $timestamps = false;
	
    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'admin_horarios';


	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'id_horarios',
                'id_dia',
                
    ];

}
