<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LicenseActivation\CreateActivationRequest;
use App\Http\Requests\SearchFilterRequest;
use App\Http\Resources\LicenseActivation\ActivationResource;
use App\Models\LicenseActivation;
use App\Services\LicenseActivationService;
use Illuminate\Http\Request;

class LicenseActivationController extends Controller
{
    protected $service;

    public function __construct(LicenseActivationService $service)
    {
        $this->service = $service;
    }

    public function index(SearchFilterRequest $request)
    {
        $data = $this->service->getAll($request->all());
        return $this->response(ActivationResource::collection($data->load('license')));
    }

    public function store(CreateActivationRequest $request)
    {
        $activation = $this->service->create($request->all());
        
        // Update license activation count
        $activation->license->increment('activation_count');
        
        return $this->response(new ActivationResource($activation), 'License activated successfully', 201);
    }

    public function show(LicenseActivation $licenseActivation)
    {
        $data = $this->service->getById($licenseActivation->id);
        return $this->response(new ActivationResource($data->load('license')));
    }

    public function update(Request $request, LicenseActivation $licenseActivation)
    {
        $validated = $request->validate([
            'device_name' => 'string|max:255',
            'last_used_at' => 'nullable|date',
            'deactivated_at' => 'nullable|date',
        ]);

        $data = $this->service->update($licenseActivation->id, $validated);
        return $this->response(new ActivationResource($data), 'Activation updated successfully');
    }

    public function destroy(LicenseActivation $licenseActivation)
    {
        $licenseActivation->license->decrement('activation_count');
        $this->service->delete($licenseActivation->id);
        return $this->response([], 'Activation deactivated successfully');
    }
}
