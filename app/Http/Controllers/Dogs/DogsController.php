<?php

namespace CCZ\Http\Controllers\Dogs;

use CCZ\Entities\Raca\Repository as Raca;
use CCZ\Entities\Dog\Repository as Dog;
use Illuminate\Http\Request;
use CCZ\Http\Controllers\Controller;

class DogsController extends Controller
{
  private $raca;
  private $dog;
  
  public function __construct(Raca $raca, Dog $dog)
  {
    $this->raca = $raca;
    $this->dog = $dog;
  }
  
  
  public function index()
  {
    $racas = $this->raca->pluck();
    $contents = $this->dog->all();
    return view('pages.dogs.index', compact('racas', 'contents'));
  }
  
  public function store(Request $request)
  {
    $this->validate($request, ['name' => 'required']);
    $this->dog->store($request->all());
    return redirect()->route('dogs.index')->with('success', 'Dados cadastrados com sucesso!');
  }
  
  
}
