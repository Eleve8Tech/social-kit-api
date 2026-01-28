<?php

namespace App\Http\Resources\LicenseActivation;

use App\Http\Resources\License\LicenseResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'license' => new LicenseResource($this->whenLoaded('license')),
            'device_name' => $this->device_name,
            'device_id' => $this->device_id,
            'ip_address' => $this->ip_address,
            'activated_at' => $this->activated_at,
            'last_used_at' => $this->last_used_at,
            'deactivated_at' => $this->deactivated_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
