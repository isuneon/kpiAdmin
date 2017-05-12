<?php

namespace App\Auth;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\Authenticatable;
use App\models\client\UserClient as User;



class EloquentAdminUserProvider extends EloquentUserProvider
{
    public function retrieveByCredentials(array $credentials)
    {
        // Of course here, you could perform the query yourself with the is_admin comparison, but
        // I think it's best to avoid as much duplication as possible
    	//Se busca el usuario con la funcion en base de datos
    	$user = \DB::connection('dbsun')->select('CALL sp_usuario_clientes(?,?)', array($credentials['email'], $credentials['password']));
    
    	if(empty($user)){
    		return null;
    	}

        
    	$user = User::find($user[0]->id);

    	return $user;
    }


    
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        
        $plain = strtoupper($credentials['password']);
        // echo($plain . '<br>' .$user->getAuthPassword());
        // dd("g");
        if($plain == $user->getAuthPassword()){
            return true;
        }
        return $this->hasher->check($plain, $user->getAuthPassword());
    }


}