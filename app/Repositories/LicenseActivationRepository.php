<?php

namespace App\Repositories;

use App\Models\LicenseActivation;
use App\Repositories\BaseRepository;

class LicenseActivationRepository extends BaseRepository
{
    public function __construct(LicenseActivation $model)
    {
        parent::__construct($model);
    }
}
