<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subscription\CreateSubscriptionRequest;
use App\Http\Requests\Subscription\UpdateSubscriptionRequest;
use App\Http\Requests\SearchFilterRequest;
use App\Http\Resources\Subscription\SubscriptionResource;
use App\Models\Subscription;
use App\Services\SubscriptionService;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    protected $service;

    public function __construct(SubscriptionService $service)
    {
        $this->service = $service;
    }

    public function index(SearchFilterRequest $request)
    {
        $data = $this->service->getAll($request->all());
        return $this->response(SubscriptionResource::collection($data->load(['user', 'plan'])));
    }

    public function store(CreateSubscriptionRequest $request)
    {
        $data = $this->service->create($request->all());
        return $this->response(new SubscriptionResource($data), 'Subscription created successfully', 201);
    }

    public function show(Subscription $subscription)
    {
        $data = $this->service->getById($subscription->id);
        return $this->response(new SubscriptionResource($data->load(['user', 'plan', 'licenses', 'payments', 'featureUsages'])));
    }

    public function update(UpdateSubscriptionRequest $request, Subscription $subscription)
    {
        $data = $this->service->update($subscription->id, $request->all());
        return $this->response(new SubscriptionResource($data), 'Subscription updated successfully');
    }

    public function destroy(Subscription $subscription)
    {
        $this->service->delete($subscription->id);
        return $this->response([], 'Subscription deleted successfully');
    }
}
