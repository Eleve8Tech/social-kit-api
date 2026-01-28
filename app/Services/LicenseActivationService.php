<?php

namespace App\Services;

use App\Repositories\LicenseActivationRepository;

class LicenseActivationService extends BaseService implements ServiceInterface
{
    public function __construct(LicenseActivationRepository $repository)
    {
        parent::__construct($repository);
    }
}
