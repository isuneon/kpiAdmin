<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'kpiadmin';

    public $timestamps = false;

    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'admin_correos';
}
