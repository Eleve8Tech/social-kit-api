<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class SearchFilterRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'filter' => 'nullable|string|max:255',
            'page' => 'nullable|integer|min:1',
            'per_page' => 'nullable|integer|min:1|max:100',
            'sort' => 'nullable|string|in:asc,desc',
            'sort_by' => 'nullable|string|max:255',
        ];
    }

    public function filters(): array
    {
        $filters = $this->input('filters', []);
        $filters = array_filter($filters, function ($value) {
            return $value !== null && $value !== '';
        });
        return [
            'q' => $this->input('q', ''),
            'filters' => $filters,
        ];
    }

    public function sort(): array
    {
        return [
            'sort_by' => $this->input('sort_by', 'id'),
            'sort_order' => $this->input('sort_order', 'desc'),
        ];
    }

    public function pagination(): array
    {
        return [
            'page'     => $this->input('page') ?? 1,
            'per_page' => $this->input('per_page') ?? 10,
        ];
    }
}
