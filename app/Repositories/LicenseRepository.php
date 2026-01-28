<?php

namespace App\Repositories;

use App\Models\License;
use App\Repositories\BaseRepository;

class LicenseRepository extends BaseRepository
{
    public function __construct(License $model)
    {
        parent::__construct($model);
    }
}
