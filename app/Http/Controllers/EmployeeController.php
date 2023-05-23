<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Ideation;
use App\Models\Emission;
use App\Models\Currency;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\BlogImage;
use App\Models\Blog;
use App\Models\Benefit;
use App\Models\CustomerContactInfo;
use App\Models\RegionClassification ;
use App\Models\GHGReductionClassification;
use App\Models\EUEnergyClassification;
use App\Models\FAQ;
use App\Models\EmployeeInvestment;
use App\Models\EmployeeDetail;
use DB;

use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Exception\CardException;

// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

// DB::listen(function ($query) {
//     if (strpos($query->sql, 'employee_investment') !== false) {
//         Log::channel('table')->info($query->sql, ['bindings' => $query->bindings]);
//     }
// });

class EmployeeController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	public  function layout(){

		return view('Employee.employeelayouts');
	}

	public  function changepassword(){

		return view('Employee.changepassword');
	}

	public  function usersetting(){
		$bank_detail = EmployeeDetail::where('employee_id',auth()->user()->id)->get();
		//return $bank_detail[0]->id;
		return view('Employee.usersetting',compact('bank_detail'));
	}
	public function add_bank_detail(Request $request)
	{
		$request->validate([
			'bank_name' => 'required|max:50',
			'account_no' => 'required|max:50',
			'bank_id' => 'required|max:50',
		]);
		if(isset($request->id) && $request->id !=" "){
			$bank_detail =EmployeeDetail::find($request->id);
			$bank_detail->bank_name  = $request->bank_name;
			$bank_detail->account_no  = $request->account_no;
			$bank_detail->bank_id  = $request->bank_id;
			$bank_detail->save();
			return redirect()->back()->with('success', 'Bank detail updated successfully!');
		}
		else 
		{
			$project = EmployeeDetail::create([
				'employee_id' => auth()->user()->id,
				'bank_name' => $request->bank_name,
				'account_no' => $request->account_no,
				'bank_id' => $request->bank_id,
			]);
			return redirect()->back()->with('success', 'Bank detail add successfully!');
		}


	}

	public  function overview(){
		$employee_investment = EmployeeInvestment::where('employee_id',auth()->user()->id)->orderBy('id', 'desc')->get();
		$number_of_transection = $employee_investment->count();
		$totat_investment_amount = $employee_investment->sum('investment_amount');
		return view('Employee.overview',compact('number_of_transection','totat_investment_amount'));
	}
	public function emission (){
	
		$already_invested  = EmployeeInvestment::where('employee_id',auth()->user()->id)->pluck('project_id');
		$projects = Project::where('customer_id',auth()->user()->customer_id)->where('status',4)->whereNotIn('id',$already_invested)->orderBy('id', 'desc')->get();

		return view('Employee.emission',compact('projects'));
	}
	public function investment($id)
	{
		$already_invested  = EmployeeInvestment::where('employee_id',auth()->user()->id)->pluck('project_id');
		$projects = Project::where('id',$id)->where('status',4)->whereNotIn('id',$already_invested)->orderBy('id', 'desc')->get();
		$project_edit = Project::where('id',$id)->first();
		return view('Employee.emission',compact('projects','project_edit'));
	}

	public function add_investment(Request $request)
	{
		$request->validate([
			'employee_investment_amount' => 'required|numeric|min:0.5',
		]);

		$email = User::where('id',auth()->user()->id)->pluck('email');
		$emp_email = $email[0]; 
		return view('Employee.confirm-payment',compact('request','emp_email'));
	}
	public function stripe(Request $request)
	{
		Stripe::setApiKey(env('STRIPE_SECRET'));

		try {
            // Call a Stripe API method that may throw an error
			$charge = Charge::create([
				'amount' =>100*$request->ammount,
				'currency' => 'usd',
				'source' => $request->stripeToken,
				'description' => 'Test Payment'
			]);
             // Handle the successful response
			//echo "Charge succeeded: " . $charge->id;
			DB::enableQueryLog();
			$project = EmployeeInvestment::create([
				'employee_id' => auth()->user()->id,
				'project_id' => $request->project_id,
				'investment_amount' => $request->ammount,
				'payment_id' => $charge->id,
			]);

			$queryLog = DB::getQueryLog();
            Log::info('Query Log:', $queryLog);

			return redirect()->route('employee.transections')->with("success","You're transection done successfully!");

		} catch (CardException $e) {
            // Handle the card error
			// echo "Stripe error: " . $e->getMessage();
			return redirect()->route('employee.investment',$request->project_id)->with('error', $e->getMessage());

		} catch (\Stripe\Exception\StripeException $e) {
            // Handle the generic Stripe error
            return redirect()->route('employee.investment',$request->project_id)->with('error', $e->getMessage());
			// echo "Stripe error: " . $e->getMessage();
		}

	}

	public function payment_success()
	{
		return view('Employee.payment-success');
	}
	public  function transections(){

		$employee_investment = EmployeeInvestment::where('employee_id',auth()->user()->id)->orderBy('id', 'desc')->get();
		$number_of_transection = $employee_investment->count();
		$totat_investment_amount = $employee_investment->sum('investment_amount');
		//return $transection;
		$projects = Project::where('status',4)->orderBy('id', 'desc')->get();
		return view('Employee.transections',compact('employee_investment','projects','number_of_transection','totat_investment_amount'));
	}

	public  function interest(){

		return view('Employee.interest');
	}

	public  function impact(){

		return view('Employee.impact');
	}
	public  function project(){
		$already_invested  = EmployeeInvestment::where('employee_id',auth()->user()->id)->pluck('project_id');
		$projects = Project::where('status',4)->whereIn('id',$already_invested)->orderBy('id', 'desc')->get();
		return view('Employee.project',compact('projects'));
	}
	public function project_detail($id)
	{
		$projects = Project::where('id',$id)->get();
		return view('Employee.project',compact('projects'));
	}

	public  function roadmap(){

		return view('Employee.roadmap');
	}

	public  function  blog(){
		$blogs= Blog::orderBy('id','desc')->get();
		return view('Employee.blog',compact('blogs'));
	}
	public function blog_detail($id)
	{
		$blogs= Blog::where('id',$id)->get();
		return view('Employee.blog-details',compact('blogs'));
	}

	public  function  ranking(){

		return view('Employee.ranking');
	}

	public  function score(){

		return view('Employee.score');
	}

	public  function faq(){
		$faqs = FAQ::orderBy('id','desc')->get();
		return view('Employee.faq',compact('faqs'));
	}
	public function sales($id)
	{
		//echo "string";
		return redirect()->back();
	}


}
