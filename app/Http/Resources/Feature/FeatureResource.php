<?php

namespace App\Http\Resources\Feature;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FeatureResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'feature_type' => $this->feature_type,
            'is_active' => $this->is_active,
            'value' => $this->whenPivotLoaded('plan_features', function () {
                return $this->pivot->value;
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
