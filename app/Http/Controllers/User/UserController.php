<?php

namespace CCZ\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CCZ\Entities\User\Repository;
use CCZ\Http\Controllers\Controller;
use CCZ\Http\Requests\User\UserPasswordUpdateRequest;
use CCZ\Http\Requests\User\UserUpdateRequest;

class UserController extends Controller
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }


    public function settings()
    {
        $user = $this->repository->find(Auth::user()->id);
        return view('pages.user.settings', compact('user'));
    }

    public function settingsUpdate(UserUpdateRequest $request)
    {
        $this->repository->update(Auth::user()->id, $request->all());
        return redirect()->route('user.settings')->with('success', 'Dados atualizados com sucesso!');
    }

    public function password()
    {
        $user = $this->repository->find(Auth::user()->id);
        return view('pages.user.password', compact('user'));
    }

    public function passwordUpdate(UserPasswordUpdateRequest $request)
    {
        $this->repository->update(Auth::user()->id, ['password' => bcrypt($request->get('password'))]);
        return redirect()->route('user.password')->with('success', 'Password atualizado com sucesso!');
    }
}
