<?php

namespace App\Http\Requests\Payment;

use App\Http\Requests\BaseRequest;

class LogPaymentRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'subscription_id' => ['required', 'exists:subscriptions,id'],
            'amount' => ['required', 'numeric', 'min:0'],
            'currency' => ['nullable', 'string', 'size:3'],
            'payment_method' => ['nullable', 'string', 'max:255'],
            'transaction_id' => ['nullable', 'string', 'max:255', 'unique:payments,transaction_id'],
            'status' => ['required', 'string', 'in:pending,completed,failed,refunded'],
            'paid_at' => ['nullable', 'date'],
        ];
    }
}
