<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
 

    public $timestamps = false;

    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'admin_correos';


	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'to_email',
                'cc_email',
                'bcc_email',
    ];
}
