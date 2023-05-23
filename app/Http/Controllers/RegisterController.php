<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
	public function index(Request $request)
	{
		$request->validate([
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:6', 'confirmed'],
		]);

		$domain = explode('@',$request['email']);
		$domain = $domain[1];
		$exist_domain = Customer::where('email_domain',$domain)->pluck('id');
		if($exist_domain->count())
		{
			User::create([
				'name' => $request->name,
				'email' => $request->email,
				'password' => Hash::make($request->password),
				'role_id' =>4,
				'customer_id' => $exist_domain[0],

			]);
			return redirect()->route('login');
		}
		else
		{
			return redirect()->route('register')->withErrors(['email' => 'Email domain must match with company email domain.']);
		}   
	}
}
