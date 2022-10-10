<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateTraineeRequest extends FormRequest
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
        //check http method
        $method = $this->method();
        if($method == 'PUT'){
        return [
            'name'=>['required'],
            'email'=>['required','email'],
            'dob'=>['required'],

        ];
     }else{
        return[
            //valide the patch request using sometimes rule
            'name'=>['sometimes','required'],
            'email'=>['sometimes','required','email'],
            'dob'=>['sometimes','required'],
            
        ];
     }
    }
   
}

