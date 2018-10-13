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
}
