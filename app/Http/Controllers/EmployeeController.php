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

		return view('Employee.usersetting');
	}

	public  function overview(){

		return view('Employee.overview');
	}
	public function emission (){
	     $projects = Project::where('status',4)->orderBy('id', 'desc')->get();
	     return view('Employee.emission',compact('projects'));
	}
	public function investment($id)
	{
	    $currencies = Currency::select('id','symbol')->orderBy('symbol', 'asc')->get();
	    $projects = Project::where('status',4)->orderBy('id', 'desc')->get();
	    $project_edit = Project::where('id',$id)->first();
	    return view('Employee.emission',compact('projects','currencies','project_edit'));
	}

	public function add_investment(Request $request)
	{
		$request->validate([
            'employee_investment_amount' => 'required',
            'currency_id' => 'required',
        ]);
		// return $request->input();
		// die();
		$project = EmployeeInvestment::create([
			'employee_id' => auth()->user()->id,
			'project_id' => $request->id,
	        'investment_amount' => $request->employee_investment_amount,
	        'currency_id' => $request->currency_id,
        ]);
          return redirect()->back()->with('success', 'Investment created successfully!');
	}
	public  function transections(){

		return view('Employee.transections');
	}

	public  function interest(){

		return view('Employee.interest');
	}

	public  function impact(){

		return view('Employee.impact');
	}

	public  function project(){
		$projects = Project::where('status',4)->orderBy('id', 'desc')->get();
		return view('Employee.project',compact('projects'));
	}

	public  function roadmap(){

		return view('Employee.roadmap');
	}

	public  function  blog(){

		return view('Employee.blog');
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
