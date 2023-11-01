<?php

namespace App\Http\Requests;

use App\Models\Restaurant;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RestaurantUpsertRequest extends FormRequest
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
            "email" =>  ['email', 'max:255', Rule::unique(Restaurant::class)->ignore($this->user()->id)],
            "phone" => "required|string|max:25",
            "activity_name" => "required|string",
            "img" => "required|image|file",
            "address" => "required|string",
            "types" => "required",
        ];
    }
}
