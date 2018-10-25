<?php

namespace CCZ\Entities\Dog;


class Repository
{
  private $dog;
  
  public function __construct(Dog $dog)
  {
    $this->dog = $dog;
  }
  
  
  public function all()
  {
    return $this->dog->orderBy('id', 'DESC')->get();
  }
  
  public function store($values)
  {
    return $this->dog->create($values);
  }
  
}