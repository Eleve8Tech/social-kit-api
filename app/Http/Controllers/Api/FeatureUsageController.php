<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureUsage\LogUsageRequest;
use App\Http\Requests\SearchFilterRequest;
use App\Http\Resources\FeatureUsage\UsageResource;
use App\Models\FeatureUsage;
use App\Services\FeatureUsageService;
use Illuminate\Http\Request;

class FeatureUsageController extends Controller
{
    protected $service;

    public function __construct(FeatureUsageService $service)
    {
        $this->service = $service;
    }

    public function index(SearchFilterRequest $request)
    {
        $data = $this->service->getAll($request->all());
        return $this->response(UsageResource::collection($data->load(['user', 'subscription', 'feature'])));
    }

    public function store(LogUsageRequest $request)
    {
        $data = $this->service->create($request->all());
        return $this->response(new UsageResource($data), 'Usage logged successfully', 201);
    }

    public function show(FeatureUsage $featureUsage)
    {
        $data = $this->service->getById($featureUsage->id);
        return $this->response(new UsageResource($data->load(['user', 'subscription', 'feature'])));
    }

    public function update(Request $request, FeatureUsage $featureUsage)
    {
        $validated = $request->validate([
            'usage_count' => 'integer|min:0',
            'period_end' => 'nullable|date',
        ]);

        $data = $this->service->update($featureUsage->id, $validated);
        return $this->response(new UsageResource($data), 'Usage updated successfully');
    }

    public function destroy(FeatureUsage $featureUsage)
    {
        $this->service->delete($featureUsage->id);
        return $this->response([], 'Usage record deleted successfully');
    }
}
