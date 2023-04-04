<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddproductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'name' => ['required', 'string', 'max:100'],
            'soni' => ['required', 'string', 'max:50'],
            'price' => ['required'],
            'category_id' => ['required'],
            'brand_id' => ['required'],
            'artikul' => ['required'],
            'active' => ['required'],
            'hit' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png', 'max:128'],
        ];
    }
}
