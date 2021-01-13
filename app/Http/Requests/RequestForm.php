<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestForm extends FormRequest
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
            'name'=>'required',
            'phone_number'=>'required|numeric',
            'email'=>'required|email',
            'address'=>'required',
            'status'=>'required',
            'manager_name'=>'required',
            'agency_number'=>'required|numeric'
        ];
    }
        public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'phone_number.required'=> 'Số điện thoại không được để trống',
            'phone_number.numeric'=> 'Số điện thoại phải là số',
            'agency_number.numeric'=>'Mã phải là số',
            'email.required'=>'Email không được để trống',
            'manager.required'=>'Tên đại lý không được để trống',
            'status.required'=>'Trạng thại không được để trống'
        ];
    }

}
