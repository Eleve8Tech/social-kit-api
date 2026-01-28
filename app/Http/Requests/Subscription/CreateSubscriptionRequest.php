<?php

namespace App\Http\Requests\Subscription;

use App\Http\Requests\BaseRequest;

class CreateSubscriptionRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'plan_id' => ['required', 'exists:plans,id'],
            'status' => ['required', 'string', 'in:active,cancelled,expired,trial'],
            'trial_ends_at' => ['nullable', 'date'],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'cancelled_at' => ['nullable', 'date'],
        ];
    }
}
