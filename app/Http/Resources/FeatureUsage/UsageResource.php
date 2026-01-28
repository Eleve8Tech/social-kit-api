<?php

namespace App\Http\Resources\FeatureUsage;

use App\Http\Resources\Feature\FeatureResource;
use App\Http\Resources\Subscription\SubscriptionResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => $this->whenLoaded('user'),
            'subscription' => new SubscriptionResource($this->whenLoaded('subscription')),
            'feature' => new FeatureResource($this->whenLoaded('feature')),
            'usage_count' => $this->usage_count,
            'period_start' => $this->period_start,
            'period_end' => $this->period_end,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
