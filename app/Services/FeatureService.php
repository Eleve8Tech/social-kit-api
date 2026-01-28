<?php

namespace App\Services;

use App\Repositories\FeatureRepository;

class FeatureService extends BaseService implements ServiceInterface
{
    public function __construct(FeatureRepository $repository)
    {
        parent::__construct($repository);
    }
}
