<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'photo' => 'mimes:jpeg,bmp,png,jpg',
            'phone' => 'size:10',
            'firstName' => 'max:20|min:2',
            'lastName' => 'max:20|min:2',
            'position' => 'max:20|min:5'
        ];
    }

    public function messages()
    {
        return [
            'phone' => 'Phone need to be 10 characters',
            'photo' => 'Please, add photo',
            'firstName' => 'Please, enter correct first name',
            'lastName' => 'Please, enter correct last name',
            'position' => 'Please, enter correct position'
        ];
    }
}
