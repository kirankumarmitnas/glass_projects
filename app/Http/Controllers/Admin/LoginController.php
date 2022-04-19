<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Validation\Validator; 
class LoginController extends Controller
{
	public function showLogin()
	{
		return view('Admin.Account.login');
	}
	public function doLogin(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'username' => ['required', 'email'],
            'password' => ['required', 'min:5', 'max:30']
        ],[
            'username.required' => 'Email is required!',
            'password.min' => 'Password minimum be 5 character short!',
			'password.max' => 'Password must be 30 character long!',
            'password.required' => 'Password is required!'
        ]);
        
       if ($validator->fails()) {
            //$request->session()->flash('error', $validator->messages()->first());
			//return redirect()->route('user.showLogin')->withErrors($validator, 'login')->withInput();
			//dd($validator->messages()->all());
            return redirect()->back()->withErrors($validator->messages())->withInput();
			//$validator->messages()->toArray()
			//($validator->messages()->toArray()
       }
	   else
	   {
		  dd( UserDetail::add($request->all()));
	   }
	}
	public function doLogin2(UserLoginRequest $request)
	{
		$post=$request->all();
		$validated = $request->validated();
		 /*$validator = \Validator::make($request->all(), [
            'item_name' => 'required|max:255',
            'sku_no' => 'required|alpha_num',
            'price' => 'required|numeric',
        ]);*/

        if ($validated->fails()) {
			echo 'hi';
            //return redirect('form')->withErrors($validated)->withInput();
        }
		 /*$validatedData = $this->validate($request, [
        'name' => 'required|string',
        'body' => 'required|string',
        'publish_at' => 'required|date_format:Y-m-d H:i:s'
    ], [
      'name.required' => 'A article name is required',
      'body.required'  => 'A article body is required',
      'publish_at.date_format' => 'The publish at date is not in the correct format.'
    ]);*/
	}
}
