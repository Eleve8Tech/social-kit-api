<?php

namespace App\Repositories;

use App\Models\Subscription;
use App\Repositories\BaseRepository;

class SubscriptionRepository extends BaseRepository
{
    public function __construct(Subscription $model)
    {
        parent::__construct($model);
    }
}
