<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Plan\CreatePlanRequest;
use App\Http\Requests\Plan\UpdatePlanRequest;
use App\Http\Requests\SearchFilterRequest;
use App\Http\Resources\Plan\PlanResource;
use App\Models\Plan;
use App\Services\PlanService;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    protected $service;
    public function __construct(PlanService $service)
    {
        $this->service = $service;
    }
    function index(SearchFilterRequest $request)
    {
        $data = $this->service->getAll($request->all());

        return $this->response(PlanResource::collection($data));
    }

    function show(Plan $plan)
    {
        $data = $this->service->getById($plan->id);
        return $this->response(new PlanResource($data));
    }

    function store(CreatePlanRequest $request)
    {
        $data = $this->service->create($request->all());
        return $this->response(new PlanResource($data), 'Plan created successfully', 201);
    }

    function update(UpdatePlanRequest $request, Plan $plan)
    {
        $data = $this->service->update($plan->id, $request->all());
        return $this->response(new PlanResource($data), 'Plan updated successfully');
    }

    function destroy(Plan $plan)
    {
        $this->service->delete($plan->id);
        return $this->response([], 'Plan deleted successfully');
    }
}
