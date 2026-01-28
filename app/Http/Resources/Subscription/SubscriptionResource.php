<?php

namespace App\Http\Resources\Subscription;

use App\Http\Resources\Plan\PlanResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => $this->whenLoaded('user'),
            'plan' => new PlanResource($this->whenLoaded('plan')),
            'status' => $this->status,
            'trial_ends_at' => $this->trial_ends_at,
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
            'cancelled_at' => $this->cancelled_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
