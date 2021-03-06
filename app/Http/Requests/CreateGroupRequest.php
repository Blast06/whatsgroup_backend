<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGroupRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|min:4|max:80',
            'image'         => 'image',
            'description'   => 'required|min:8|max:220'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
        ];
    }


}
