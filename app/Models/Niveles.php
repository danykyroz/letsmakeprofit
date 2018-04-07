<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Niveles extends Model
{

  /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'niveles';


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'nivel','dinero','minimo'
  ];

}
