<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Perfil extends Model
{

  /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'perfil';


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'foto_perfil','telefono','telefonodos','email','edad',"genero",
      "facebook","google","whatsapp","twitter","pais","ciudad","direccion",
      "codigo_postal","terminos","cliente_id"
  ];

}
