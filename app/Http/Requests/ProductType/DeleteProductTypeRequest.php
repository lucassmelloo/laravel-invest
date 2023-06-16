<?php

namespace App\Http\Requests\ProductType;

use Illuminate\Foundation\Http\FormRequest;

class DeleteProductTypeRequest extends FormRequest
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
            'abbreviation'=>'required',
            'id'=>'required,exists:product_types:id',
        ];
    }

    public function messages()
    {
        return [
            'abbreviation.required'=>'To exclude a product type, you must enter its abbreviation.',
            'id.required'=>'ID is required.'
        ];
    }

}
