<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type'         => ['required', Rule::in(['contact', 'cta', 'enquiry'])],
            'name'         => ['required', 'string', 'max:150'],
            'email'        => ['required', 'email', 'max:190'],
            'phone'        => ['nullable', 'string', 'max:50'],
            'company'      => ['nullable', 'string', 'max:150'],
            'service'      => ['nullable', 'string', 'max:150'],
            'service_slug' => ['nullable', 'string', 'max:150'],
            'budget'       => ['nullable', 'string', 'max:100'],
            'message'      => ['nullable', 'string', 'max:5000'],
            // Honeypot: must stay empty (bots fill it).
            'website'      => ['nullable', 'size:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'website.size' => 'Spam detected.',
        ];
    }
}
