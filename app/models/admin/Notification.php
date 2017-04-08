<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
  

    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'admin_notificacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'name',
                'descripcion',
                'activo',
                'sender_user',
                'sender_pass',
                'sender_asunto',
                'sender_cuerpo',
                'sender_attach',
                'sp_nombre_consultar',
                'sp_parametros_enviar',
                'sms_send',
                'sms_numbers',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function emails()
    {
        return $this->belongsTo('App\models\admin\Emails', 'id', 'id_notifi');
    }

}
