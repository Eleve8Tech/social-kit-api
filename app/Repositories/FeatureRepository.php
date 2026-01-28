<?php

namespace App\Repositories;

use App\Models\Feature;
use App\Repositories\BaseRepository;

class FeatureRepository extends BaseRepository
{
    public function __construct(Feature $model)
    {
        parent::__construct($model);
    }
}
