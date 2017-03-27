<?php

namespace App\models\admin;


use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use EntrustUserTrait; // add this trait to your user model
    
    protected $primarykey = 'id';
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


    //establecemos las relaciones con el modelo Role, ya que un usuario puede tener varios roles
    //y un rol lo pueden tener varios usuarios
    public function roles(){
        return $this->belongsToMany('App\models\admin\Role');
    }


}
