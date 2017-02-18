<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'kpiadmin';

    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'users';
}
