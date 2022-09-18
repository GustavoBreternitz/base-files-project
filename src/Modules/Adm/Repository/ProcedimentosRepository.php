<?php

namespace Modules\Adm\Repository;

use App\Models\Procedimentos;

class ProcedimentosRepository
{
    public function __construct(Procedimentos $procedimentos)
    {
        $this->model = $procedimentos;
    }

    public function create($dados)
    {
        return $this->model->create($dados);
    }
}

