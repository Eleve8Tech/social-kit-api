<?php

namespace App\Http\Requests\Feature;

use App\Http\Requests\BaseRequest;

class CreateFeatureRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:features,slug'],
            'description' => ['nullable', 'string'],
            'feature_type' => ['required', 'string', 'in:boolean,limit,quota'],
            'is_active' => ['nullable', 'boolean'],
        ];
    }
}
