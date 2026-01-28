<?php

namespace App\Services;

use App\Repositories\PaymentRepository;

class PaymentService extends BaseService implements ServiceInterface
{
    public function __construct(PaymentRepository $repository)
    {
        parent::__construct($repository);
    }
}
