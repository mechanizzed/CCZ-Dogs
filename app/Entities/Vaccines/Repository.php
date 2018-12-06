<?php


namespace CCZ\Entities\Vaccines;


class Repository
{
  
  private $vaccines;
  
  public function __construct(Vaccines $vaccines)
  {
    $this->vaccines = $vaccines;
  }
  
  public function all()
  {
    return $this->vaccines->orderBy('date')->latest()->get();
  }
  
  public function store($values)
  {
    return $this->vaccines->create($values);
  }
  
  public function update($id, $values)
  {
    return $this->vaccines->find($id)->update($values);
  }
  
  public function delete($id)
  {
    return $this->vaccines->find($id)->delete();
  }
  
}