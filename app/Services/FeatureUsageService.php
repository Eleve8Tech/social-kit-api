<?php

namespace App\Services;

use App\Repositories\FeatureUsageRepository;

class FeatureUsageService extends BaseService implements ServiceInterface
{
    public function __construct(FeatureUsageRepository $repository)
    {
        parent::__construct($repository);
    }
}
