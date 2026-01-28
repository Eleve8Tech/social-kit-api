<?php

namespace App\Http\Requests\FeatureUsage;

use App\Http\Requests\BaseRequest;

class LogUsageRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'subscription_id' => ['required', 'exists:subscriptions,id'],
            'feature_id' => ['required', 'exists:features,id'],
            'usage_count' => ['nullable', 'integer', 'min:0'],
            'period_start' => ['nullable', 'date'],
            'period_end' => ['nullable', 'date'],
        ];
    }
}
