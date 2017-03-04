<?php

namespace App\models\admin;


use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use EntrustUserTrait; // add this trait to your user model
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
