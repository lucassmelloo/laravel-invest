<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFixedIncomeRequest extends FormRequest
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
            'title'=>['required', 'max:255'],
            'application_date'=>['required'],
            'due_date'=>['required', 'date','after_today'],
            'applied_value'=>['required'],
            'product_type_id'=>['required']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'A title is required',
            'application_date.require'=> 'Application date is required',
            'due_date.required'=>'Due date is required',
            'due_date.after_today'=>'The Due Date needs to be greater than today',
            'applied_value'=>'Applied value is required'
        ];
    }


}
