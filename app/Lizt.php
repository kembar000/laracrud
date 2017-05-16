<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lizt extends Model
{
  protected $table = 'lists';

  protected $fillable = [
     'name',
  ];

  public function todos()
  {
    return $this->hasMany('App\Todo');
  }
}
