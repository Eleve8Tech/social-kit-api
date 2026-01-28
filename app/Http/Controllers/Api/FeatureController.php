<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feature\CreateFeatureRequest;
use App\Http\Requests\Feature\UpdateFeatureRequest;
use App\Http\Requests\SearchFilterRequest;
use App\Http\Resources\Feature\FeatureResource;
use App\Models\Feature;
use App\Services\FeatureService;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    protected $service;

    public function __construct(FeatureService $service)
    {
        $this->service = $service;
    }

    public function index(SearchFilterRequest $request)
    {
        $data = $this->service->getAll($request->all());
        return $this->response(FeatureResource::collection($data));
    }

    public function store(CreateFeatureRequest $request)
    {
        $data = $this->service->create($request->all());
        return $this->response(new FeatureResource($data), 'Feature created successfully', 201);
    }

    public function show(Feature $feature)
    {
        $data = $this->service->getById($feature->id);
        return $this->response(new FeatureResource($data));
    }

    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        $data = $this->service->update($feature->id, $request->all());
        return $this->response(new FeatureResource($data), 'Feature updated successfully');
    }

    public function destroy(Feature $feature)
    {
        $this->service->delete($feature->id);
        return $this->response([], 'Feature deleted successfully');
    }
}
