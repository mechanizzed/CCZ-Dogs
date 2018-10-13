<?php

namespace CCZ\Entities\Raca;

class Repository
{
    private $raca;

    public function __construct(Raca $raca)
    {
        $this->raca = $raca;
    }

    public function all()
    {
        return $this->raca->orderBy('name', 'ASC')->get();
    }
}
