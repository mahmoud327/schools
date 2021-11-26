<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class RequestRoom extends FormRequest
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
       if (Request::isMethod('post'))
       {
         
        return [

            'room_number'         => 'required|unique:rooms,room_number|numeric',
            'number_of_bed'      => 'required|numeric',
    
        ];
       }
       else
       {
           
        return [
            'room_number'         => 'required|unique:rooms,id,:id|numeric',
            'number_of_bed'      => 'required|numeric',
    
        ];

       }
    }

    public function messages(){
        return [
            'room_number.required' => 'room_number is required',
            'room_number.unique'    => 'room_number is exists ',
            'room_number.numeric'    => 'room_number is  enter number ',
            'number_of_bed.required' => 'number_of_bed  is required.',
            'number_of_bed.numeric'    => 'number_of_bed is  enter number',
    
        ];
    }
}
