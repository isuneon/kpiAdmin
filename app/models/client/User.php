<?php

namespace App\models\client;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Model
{
    
	use EntrustUserTrait; // add this trait to your user model
    /**
	* The connection name for the model.
	*
	* @var string
	*/
	protected $connection = 'dbsun';

	/**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'users';
}
