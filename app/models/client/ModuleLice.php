<?php

namespace App\models\client;

use Illuminate\Database\Eloquent\Model;

class ModuleLice extends Model
{
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
	protected $table = 'modulos_lice';
}
