<?php

namespace App\Http\Resources\License;

use App\Http\Resources\Subscription\SubscriptionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LicenseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'subscription' => new SubscriptionResource($this->whenLoaded('subscription')),
            'user' => $this->whenLoaded('user'),
            'license_key' => $this->license_key,
            'status' => $this->status,
            'max_activations' => $this->max_activations,
            'activation_count' => $this->activation_count,
            'expires_at' => $this->expires_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
