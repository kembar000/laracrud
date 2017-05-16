<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  protected $fillable = [
     'name', 'list_id',
  ];

  public function list()
  {
    return $this->belongsTo('App\Lizt');
  }
}
