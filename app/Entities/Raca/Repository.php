<?php

namespace CCZ\Entities\Raca;

class Repository
{
  private $raca;
  
  public function __construct(Raca $raca)
  {
    $this->raca = $raca;
  }
  
  public function all()
  {
    return $this->raca->orderBy('name', 'ASC')->get();
  }
  
  public function pluck()
  {
    return $this->raca->orderBy('name', 'ASC')->pluck('name', 'id');
  }
  
  public function store($values)
  {
    return $this->raca->create($values);
  }
  
  public function update($id, $values)
  {
    return $this->raca->find($id)->update($values);
  }
  
  public function delete($id)
  {
    return $this->raca->find($id)->delete();
  }
}
