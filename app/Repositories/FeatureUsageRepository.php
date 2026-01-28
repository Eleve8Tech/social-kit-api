<?php

namespace App\Repositories;

use App\Models\FeatureUsage;
use App\Repositories\BaseRepository;

class FeatureUsageRepository extends BaseRepository
{
    public function __construct(FeatureUsage $model)
    {
        parent::__construct($model);
    }
}
