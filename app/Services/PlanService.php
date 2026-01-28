<?php

namespace App\Services;

use App\Repositories\PlanRepository;

class PlanService extends BaseService implements ServiceInterface
{
    public function __construct(PlanRepository $repository)
    {
        parent::__construct($repository);
    }
}
