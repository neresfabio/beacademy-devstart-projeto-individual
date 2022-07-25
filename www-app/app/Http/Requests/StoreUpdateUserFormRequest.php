<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? '';
        $rules = [
            'name' => 'required|string|max:50|min:3',
            'email'=> 'required|email|unique:users,email,{$id},id',
            'identity_card'=> 'required|string|max:12|min:11|unique:users,identity_card,{$id},id',
            'age'=> 'string|max:3|min:1',
            'social_security'=> 'required|string|unique:users,social_security,{$id},id',
            'phone'=> 'required|string',
            'profession'=> 'string',
            'postal_code'=> 'required|string',
            'gender'=> 'string',
            'marital_status'=> 'string',
        ];

        if($this->method('PUT'))
        {
            $rules['identity_card']=[
                'nullable',
                'min:6',
                'max:12'
            ];
        }

        return $rules;
    }
}
