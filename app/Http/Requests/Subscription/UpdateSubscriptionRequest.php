<?php

namespace App\Http\Requests\Subscription;

use App\Http\Requests\BaseRequest;

class UpdateSubscriptionRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'status' => ['nullable', 'string', 'in:active,cancelled,expired,trial'],
            'trial_ends_at' => ['nullable', 'date'],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'cancelled_at' => ['nullable', 'date'],
        ];
    }
}
