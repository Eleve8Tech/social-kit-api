<?php

namespace App\Http\Requests\License;

use App\Http\Requests\BaseRequest;

class CreateLicenseRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'subscription_id' => ['required', 'exists:subscriptions,id'],
            'user_id' => ['required', 'exists:users,id'],
            'license_key' => ['nullable', 'string', 'unique:licenses,license_key'],
            'status' => ['required', 'string', 'in:active,inactive,suspended,expired'],
            'max_activations' => ['nullable', 'integer', 'min:1'],
            'expires_at' => ['nullable', 'date'],
        ];
    }
}
