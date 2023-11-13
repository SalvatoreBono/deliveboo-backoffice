<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderUpsertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'customer_name' => 'required|string',
            'customer_surname' => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|max:25',
            'customer_address' => 'required|string',
            'total_price' => 'required|min:0',
            'status' => 'required|boolean',
            'notes' => 'string|nullable',
            'products' => 'required',
            'quantities' => 'required',
        ];
    }
}
