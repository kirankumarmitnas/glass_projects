<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
	public function response()
	{
		 return redirect()->back()->withErrors($validator->messages())->withInput();
	}
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
            'username' => ['required', 'email'],
            'password' => ['required', 'min:5', 'max:30']
        ];
    }
	 public function messages()
    {
        return [
            'username.required' => 'Email is required!',
            'password.min' => 'Password minimum be 5 character short!',
			'password.max' => 'Password must be 30 character long!',
            'password.required' => 'Password is required!'
        ];
    }
	public function filters()
    {
        return [
            'username' => 'trim|lowercase',
        ];
    }
}
