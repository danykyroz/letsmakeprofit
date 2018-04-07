<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class NotificacionPago extends Model
{

  /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'notificacion_pago';


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'cliente_id','referido_id','comentarios','archivo','nivel','dinero','aprobado','fecha_aprobacion'
  ];

}
