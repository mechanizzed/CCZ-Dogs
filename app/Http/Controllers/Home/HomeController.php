<?php

namespace CCZ\Http\Controllers\Home;

use CCZ\Entities\Dog\Repository as Dog;
use CCZ\Entities\Raca\Repository as Raca;
use Illuminate\Http\Request;
use CCZ\Http\Controllers\Controller;

class HomeController extends Controller
{
  
  private $dog;
  private $raca;
  
  public function __construct(Dog $dog, Raca $raca)
  {
    $this->dog = $dog;
    $this->raca = $raca;
  }
  
  public function index()
  {
    $dogs = count($this->dog->all());
    $racas = count($this->raca->all());
    return view('pages.home.home', compact('dogs', 'racas'));
  }
}
