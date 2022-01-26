<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class RequestStudent extends FormRequest
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
            'name'           => 'required',
            'school_id'      => 'required',
            'order'           => 'required|numeric',
        ];
      
    }

    public function messages(){
        return [
            'name.required' => 'name is required',
            'school_id.required'    => ' is exselect school is required  ',
            'order.required'    => 'order is  required  ',
            'order.numeric'    => 'order is  enter number ',
        
        ];
    }
}
