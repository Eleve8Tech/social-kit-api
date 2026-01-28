<?php

namespace App\Http\Requests\Feature;

use App\Http\Requests\BaseRequest;

class UpdateFeatureRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:features,slug,' . $this->route('feature')],
            'description' => ['nullable', 'string'],
            'feature_type' => ['nullable', 'string', 'in:boolean,limit,quota'],
            'is_active' => ['nullable', 'boolean'],
        ];
    }
}
