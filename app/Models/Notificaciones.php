<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Notificaciones extends Model
{

  /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'notificaciones';


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'mensaje','titulo','eliminada','tipo','cliente_id'
  ];

}
