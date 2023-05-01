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

	public  function emission(){

		return view('Employee.emission');
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
		$projects = Project::orderBy('id', 'desc')->get();
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


}
