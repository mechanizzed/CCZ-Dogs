<?php

namespace CCZ\Http\Controllers\Vaccines;

use CCZ\Entities\Dog\Repository as Dog;
use CCZ\Entities\Vaccines\Repository as Vaccines;
use Illuminate\Http\Request;
use CCZ\Http\Controllers\Controller;

class VaccinesController extends Controller
{
  private $vaccines;
  private $dog;
  
  public function __construct(Vaccines $vaccines, Dog $dog)
  {
    $this->vaccines = $vaccines;
    $this->dog = $dog;
  }
  
  
  public function index($idDog)
  {
    $dog = $this->dog->find($idDog);
    return view('pages.vaccines.index', compact('dog'));
  }
  
  public function store(Request $request)
  {
    $this->validate($request, ['title' => 'required', 'data' => 'required']);
    $this->vaccines->store($request->all());
    return redirect()->back()->with('success', 'Dados cadastrados com sucesso!');
  }
  
  public function update($id, Request $request)
  {
    $this->validate($request, ['title' => 'required', 'data' => 'required']);
    $this->vaccines->update($id, $request->all());
    return redirect()->back()->with('success', 'Dados cadastrados com sucesso!');
  }
  
  public function delete($id)
  {
    $this->vaccines->delete($id);
    return redirect()->back()->with('success', 'Registro excluído com sucesso!');
  }
  
}
