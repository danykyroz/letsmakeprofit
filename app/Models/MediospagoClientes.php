<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MediospagoClientes extends Model
{

  /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'mediospago_clientes';


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'link','mediopago_id','cliente_id'
  ];

}
