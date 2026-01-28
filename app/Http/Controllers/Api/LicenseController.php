<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\License\CreateLicenseRequest;
use App\Http\Requests\License\UpdateLicenseRequest;
use App\Http\Requests\SearchFilterRequest;
use App\Http\Resources\License\LicenseResource;
use App\Models\License;
use App\Services\LicenseService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LicenseController extends Controller
{
    protected $service;

    public function __construct(LicenseService $service)
    {
        $this->service = $service;
    }

    public function index(SearchFilterRequest $request)
    {
        $data = $this->service->getAll($request->all());
        return $this->response(LicenseResource::collection($data->load(['user', 'subscription'])));
    }

    public function store(CreateLicenseRequest $request)
    {
        $data = $request->all();
        if (empty($data['license_key'])) {
            $data['license_key'] = strtoupper(Str::random(16));
        }
        
        $license = $this->service->create($data);
        return $this->response(new LicenseResource($license), 'License created successfully', 201);
    }

    public function show(License $license)
    {
        $data = $this->service->getById($license->id);
        return $this->response(new LicenseResource($data->load(['user', 'subscription', 'activations'])));
    }

    public function update(UpdateLicenseRequest $request, License $license)
    {
        $data = $this->service->update($license->id, $request->all());
        return $this->response(new LicenseResource($data), 'License updated successfully');
    }

    public function destroy(License $license)
    {
        $this->service->delete($license->id);
        return $this->response([], 'License deleted successfully');
    }
}
