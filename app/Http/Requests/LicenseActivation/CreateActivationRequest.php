<?php

namespace App\Http\Requests\LicenseActivation;

use App\Http\Requests\BaseRequest;

class CreateActivationRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'license_id' => ['required', 'exists:licenses,id'],
            'device_name' => ['nullable', 'string', 'max:255'],
            'device_id' => ['required', 'string', 'unique:license_activations,device_id'],
            'ip_address' => ['nullable', 'string', 'max:45'],
        ];
    }
}
