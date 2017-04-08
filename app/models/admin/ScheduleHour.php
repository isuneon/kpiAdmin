<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class ScheduleHour extends Model
{
   
	public $timestamps = false;
    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'admin_horarios_horas';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'id_horarios',
                'hora_sync',
                'activo',
               
    ];
}
