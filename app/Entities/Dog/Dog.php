<?php

namespace CCZ\Entities\Dog;

use CCZ\Entities\Raca\Raca;
use CCZ\Entities\Vaccines\Vaccines;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
  protected $table = "dogs";
  protected $guarded = ['id'];
  
  
  public function raca()
  {
    return $this->belongsTo(Raca::class, 'raca_id');
  }
  
  public function vaccines()
  {
    return $this->hasMany(Vaccines::class, 'dog_id')->orderBy('id');
  }
  
}
