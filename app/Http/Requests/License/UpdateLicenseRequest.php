<?php

namespace App\Http\Requests\License;

use App\Http\Requests\BaseRequest;

class UpdateLicenseRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'status' => ['nullable', 'string', 'in:active,inactive,suspended,expired'],
            'max_activations' => ['nullable', 'integer', 'min:1'],
            'expires_at' => ['nullable', 'date'],
        ];
    }
}
