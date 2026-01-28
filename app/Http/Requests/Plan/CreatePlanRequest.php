<?php

namespace App\Http\Requests\Plan;

use App\Http\Requests\BaseRequest;

class CreatePlanRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
            'billing_cycle' => ['required', 'string', 'max:255', 'in:weekly,monthly,yearly'],
            'trial_days' => ['nullable', 'integer', 'min:0'],
        ];
    }
}
