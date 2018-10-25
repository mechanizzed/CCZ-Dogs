<?php

namespace CCZ\Entities\Dog;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
  protected $table = "dogs";
  protected $guarded = ['id'];
}
