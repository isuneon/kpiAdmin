<?php

namespace App\models\client;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable; 
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class UserClient extends Model implements AuthenticatableContract
{
    
	use Authenticatable;

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
	protected $table = 'usuario_clientes';
}
