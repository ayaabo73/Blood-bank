<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class patient extends FormRequest
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
        return [
        
                'name'=>'required',
                'age'=>'required',
                'type'=>'required',
                'blood_type'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'hospitalname'=>'required',
                'amount'=>'required',
    
        ];
    }
}
