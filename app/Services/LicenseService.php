<?php

namespace App\Services;

use App\Repositories\LicenseRepository;

class LicenseService extends BaseService implements ServiceInterface
{
    public function __construct(LicenseRepository $repository)
    {
        parent::__construct($repository);
    }
}
