<?php

namespace CCZ\Http\Controllers\Dogs;

use CCZ\Entities\Raca\Repository as Raca;
use CCZ\Entities\Dog\Repository as Dog;
use Generals\Upload\Upload;
use Illuminate\Http\Request;
use CCZ\Http\Controllers\Controller;

class DogsController extends Controller
{
  private $raca;
  private $dog;
  private $upload;
  
  public function __construct(Raca $raca, Dog $dog, Upload $upload)
  {
    $this->raca = $raca;
    $this->dog = $dog;
    $this->upload = $upload;
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
  
  public function update(Request $request, $id)
  {
    $this->validate($request, ['name' => 'required']);
    $this->dog->update($id, $request->all());
    return redirect()->route('dogs.index')->with('success', 'Dados atualizados com sucesso!');
  }
  
  public function delete($id)
  {
    $this->dog->delete($id);
    return redirect()->route('dogs.index')->with('success', 'Registro excluído com sucesso!');
  }
  
  public function updateImage(Request $request, $id)
  {
    $this->validate($request, ['file' => 'required|image']);
    
    if ($this->dog->find($id)->file) {
      $this->dog->deleteImage(($this->dog->find($id)->file));
    }
    
    $file = $request->file('file');
    $fileName = $this->upload->makeResize($file, 800, 'uploads/dogs');
    $values = $request->all();
    $values['file'] = $fileName;
    $this->dog->update($id, $values);
    return redirect()->route('dogs.index')->with('success', 'Imagem atualizada com sucesso!');
  }
  
  
}
