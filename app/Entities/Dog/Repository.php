<?php

namespace CCZ\Entities\Dog;


use Illuminate\Support\Facades\Storage;

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
  
  public function find($id)
  {
    return $this->dog->find($id);
  }
  
  public function store($values)
  {
    return $this->dog->create($values);
  }
  
  public function update($id, $values)
  {
    return $this->dog->find($id)->update($values);
  }
  
  public function delete($id)
  {
    return $this->dog->find($id)->delete();
  }
  
  public function deleteImage($image)
  {
    return Storage::disk('local_upload_dogs')->delete($image);
  }
  
}