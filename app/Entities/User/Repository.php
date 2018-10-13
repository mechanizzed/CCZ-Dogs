<?php

namespace CCZ\Entities\User;
use CCZ\User;

class Repository
{
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}


	public function all()
	{
		return $this->user->orderBy('name', 'ASC')->get();
	}

	public function find($id)
	{
		return $this->user->find($id);
	}


	public function update($id, $values)
	{
		return $this->user->find($id)->update($values);
	}

	


}