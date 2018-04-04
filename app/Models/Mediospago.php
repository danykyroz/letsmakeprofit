<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Mediospago extends Model
{

  /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'mediospago';


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'nombre','imagen'
  ];

}
