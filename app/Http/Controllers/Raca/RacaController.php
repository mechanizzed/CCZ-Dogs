<?php

namespace CCZ\Http\Controllers\Raca;

use Illuminate\Http\Request;
use CCZ\Http\Controllers\Controller;
use CCZ\Entities\Raca\Repository;

class RacaController extends Controller
{
  private $repository;
  
  public function __construct(Repository $repository)
  {
    $this->repository = $repository;
  }
  
  public function index()
  {
    $contents = $this->repository->all();
    return view('pages.raca.index', compact('contents'));
  }
  
  public function store(Request $request)
  {
    $this->validate($request, ['name' => 'required']);
    $this->repository->store($request->all());
    return redirect()->route('raca.index')->with('success', 'Dados cadastrados com sucesso!');
  }
  
  public function update($id, Request $request)
  {
    $this->validate($request, ['name' => 'required']);
    $this->repository->update($id, $request->all());
    return redirect()->route('raca.index')->with('success', 'Dados cadastrados com sucesso!');
  }
  
  public function delete($id)
  {
    $this->repository->delete($id);
    return redirect()->route('raca.index')->with('success', 'Registro excluído com sucesso!');
  }
}
