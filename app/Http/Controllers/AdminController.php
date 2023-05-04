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
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }  
    public function dashboard(){

        return view('Admin.admindashboard');
    }
    public function onboard(){
        $customers = User::where('role_id',5)->orderBy('id', 'desc')->get();
        $regionClassification = RegionClassification::orderBy('name','ASC')->get();
        return view('Admin.adminonboard',compact('customers','regionClassification'));
    }
    public function add_customer(Request $request){

        $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|email|unique:users|max:191',
            // 'phone' => 'required|unique:users|max:191',
            'password' => 'required|max:191',
        ]);
        $customer_contract ='';
        $customer_questionnaire ='';
        $partner_questionnaire= '';
        if($request->hasFile('customer_contract') && $request->customer_contract->isValid()){
            $extension = $request->customer_contract->extension();
            $customer_contract = time()."_contract.".$extension;
            $request->customer_contract->move('uploads/customer-doc', $customer_contract);
        }
        if($request->hasFile('customer_questionnaire') && $request->customer_questionnaire->isValid()){
            $extension = $request->customer_questionnaire->extension();
            $customer_questionnaire = time()."_customer_questionnaire.".$extension;
            $request->customer_questionnaire->move('uploads/customer-doc', $customer_questionnaire);
        }
        if($request->hasFile('partner_questionnaire') && $request->partner_questionnaire->isValid()){
            $extension = $request->partner_questionnaire->extension();
            $partner_questionnaire = time()."_partner_questionnaire.".$extension;
            $request->partner_questionnaire->move('uploads/customer-doc', $partner_questionnaire);
        }
        $user_id = User::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'role_id'=>5,
            'password' => Hash::make($request->password),
            'created_by' => auth()->user()->id,
        ]);
        Customer::create([
            'user_id' => $user_id,
            'name' => $request->name,
            // 'phone' => $request->phone,
            // 'address' => $request->address,
            'website_url' => $request->website_url,
            'customer_contract' => $customer_contract,
            'customer_questionnaire' => $customer_questionnaire,
            'partner_questionnaire' => $partner_questionnaire,
            'region_classification_id' => $request->region,
            'partner_classification' => $request->partner_classification,
        ]);
        CustomerContactInfo::create([
           'user_id' => $user_id,
           'name'    =>$request->contact_person_name,
           'phone' => $request->phone,
           'email' => $request->contact_email,
           // 'website_url' => $request->website_url,
           'role'  => $request->role,
           'website_url' => $request->website_url,
       ]);

        return redirect()->back()->with('success', 'Customer created successfully!');
    }
    public function ideation (){
        $ideations = Ideation::orderBy('id', 'desc')->get();
        $GHGReductionClassification   = GHGReductionClassification::orderBy('name','ASC')->get();
        $EUEnergyClassification       = EUEnergyClassification::orderBy('name','ASC')->get();
        return view('Admin.ideation',compact('ideations','GHGReductionClassification','EUEnergyClassification'));
    }
    public function add_ideation(Request $request)
    {
        $request->validate([
            'name' => 'required|max:191',
            'type' => 'required|max:191',
            'details' => 'required',
            'i_attributes' => 'required|max:191',
        ]);

        $project_proposal ='';
        $feasibility_form ='';
        $business_case= '';
        if($request->hasFile('project_proposal') && $request->project_proposal->isValid()){
            $extension = $request->project_proposal->extension();
            $project_proposal = time()."_project_proposal.".$extension;
            $request->project_proposal->move('uploads/ideation-doc', $project_proposal);
        }
        if($request->hasFile('feasibility_form') && $request->feasibility_form->isValid()){
            $extension = $request->feasibility_form->extension();
            $feasibility_form = time()."_feasibility_form.".$extension;
            $request->feasibility_form->move('uploads/ideation-doc', $feasibility_form);
        }
        if($request->hasFile('business_case') && $request->business_case->isValid()){
            $extension = $request->business_case->extension();
            $business_case = time()."_business_case.".$extension;
            $request->business_case->move('uploads/ideation-doc', $business_case);
        }
        Ideation::create([
            'name' => $request->name,
            'details' => $request->details,
            'type' => $request->type,
            'attribute' => $request->i_attributes,
            'ghg_reduction_classification_id' => $request->ghg_reduction_classification,
            'end_use_energy_classification_id' => $request->end_use_energy_classification,
            'project_proposal' => $project_proposal,
            'feasibility_form' => $feasibility_form,
            'business_case' => $business_case,
        ]);
        return redirect()->back()->with('success', 'Ideation created successfully!');
    }
    public function delete_customer($id)
    {
        $user = User::find($id);
        $user->customer()->delete(); // delete all associated posts
        $user->delete();
        return redirect()->back()->with('success', 'Customer deleted successfully!');
    }
    public function delete_ideation($id)
    {
        $user = Ideation::find($id)->delete($id);
        return redirect()->back()->with('success', 'Ideation deleted successfully!');
    }

    public function add_emission(Request $request)
    {
       $request->validate([
        'name' => 'required|max:191',
        'api_implemented' => 'required',
        'amount_confirm' => 'required',
        'tested_date'    => 'required',
    ]); 
       Emission::create([
        'name' => $request->name,
        'api_implemented' => $request->api_implemented,
        'amount_confirm' => $request->amount_confirm,
        'tested_date' => $request->tested_date,
    ]);

       return redirect()->back()->with('success', 'Emission created successfully!');
   }

   public function emission (){
     $types = Ideation::select('type')->orderBy('type', 'asc')->groupBy('type')->get();
     $attributes = Ideation::select('attribute')->orderBy('attribute', 'asc')->groupBy('attribute')->get();
     $projects = Project::orderBy('id', 'desc')->get();
     return view('Admin.emission',compact('projects','types','attributes'));
 }
 public function project (){

    $types = Ideation::select('type')->orderBy('type', 'asc')->groupBy('type')->get();
    $attributes = Ideation::select('attribute')->orderBy('attribute', 'asc')->groupBy('attribute')->get();
    $currencies = Currency::select('id','symbol')->orderBy('symbol', 'asc')->get();
    $projects = Project::orderBy('id', 'desc')->get();
    return view('Admin.emission',compact('projects','types','attributes','currencies'));
}
public function edit_project($id)
{
    $types = Ideation::select('type')->orderBy('type', 'asc')->groupBy('type')->get();
    $attributes = Ideation::select('attribute')->orderBy('attribute', 'asc')->groupBy('attribute')->get();
    // $currencies = Currency::select('id','symbol')->orderBy('symbol', 'asc')->get();
    $projects = Project::orderBy('id', 'desc')->get();
    $project_edit = Project::where('id',$id)->first();
    return view('Admin.emission',compact('projects','types','attributes','project_edit'));
}
public function add_project(Request $request)
{
    $request->validate([
        'name' => 'required|max:191',
        'details' => 'required',
        'type' => 'required',
        'i_attributes' => 'required',
        'ghg_reduction_classification' => 'required',
        'end_use_energy_classification' => 'required',
        'launch_date' => 'required',
        'investment_amount' => 'required',
        'currency_id' => 'required',
        'api_url' => 'required',
        'images' => 'required',
        'invoice_epc' => 'required',
        'sign_off' => 'required',
    ]);

    $invoice_epc ='';
    $sign_off ='';
    if($request->hasFile('invoice_epc') && $request->invoice_epc->isValid()){
        $extension = $request->invoice_epc->extension();
        $invoice_epc = time()."_invoice_epc.".$extension;
        $request->invoice_epc->move('uploads/project-doc', $invoice_epc);
    }
    if($request->hasFile('sign_off') && $request->sign_off->isValid()){
        $extension = $request->sign_off->extension();
        $sign_off = time()."_sign_off.".$extension;
        $request->sign_off->move('uploads/project-doc', $sign_off);
    }
    $project = Project::create([
        'name' => $request->name,
        'detail' => $request->details,
        'type' => $request->type,
        'attribute' => $request->i_attributes,
        'launch_date' => $request->launch_date,
        'investment_amount' => $request->investment_amount,
        'currency_id' => $request->currency_id,
        'ghg_reduction_classification' => $request->ghg_reduction_classification,
        'end_use_energy_classification' => $request->end_use_energy_classification,
        'api_url' => $request->api_url,  
        'invoice_epc' => $invoice_epc,
        'sign_off' => $sign_off,
        'webcam_url' => $request->webcam_url,
    ]);
    $images = $request->file('images');
    foreach ($images as $image) {
        $filename = $image->getClientOriginalName();
        $project_image = time()."_project-image".$filename;
        $image->move('uploads/project-doc', $project_image);
        ProjectImage::create([
            'project_id' =>$project->id,
            'image'=> $project_image ,
        ]);
    }
    return redirect()->back()->with('success', 'Project created successfully!');
}
public function update_project(Request $request)
{
    $request->validate([
        'tested_by' => 'required|max:191',
        'api_implemented' => 'required',
        'amount_confirm' => 'required',
        'tested_date' => 'required',
    ]);

    $project =Project::find($request->id);
    $project->tested_by  = $request->tested_by;
    $project->api_implemented  = $request->api_implemented;
    $project->amount_confirm  = $request->amount_confirm;
    $project->tested_date  = $request->tested_date;
    $project->status  = $request->status;
    $project->remarks  = $request->remarks;
    $project->save();
    return redirect()->route('emission')->with('success', 'Project updated successfully!');
}
public function delete_project($id)
{

    $project = Project::find($id);
    $project->projectImage()->delete(); 
    $project->delete();

    return redirect()->back()->with('success', 'Project deleted successfully!');
}

public function delete_emission($id)
{
    Emission::find($id)->delete($id);
    return redirect()->back()->with('success', 'Emission deleted successfully!');
}
public function blog()
{
    $blogs = Blog::orderBy('id','DESC')->get();
    return view('Admin.blog',compact('blogs'));
}
public function add_blog(Request $request)
{
    $request->validate([
        'name' => 'required|max:191',
        'header' => 'required',
        'launch_date' => 'required',
        'campaign_message' => 'required',
        'description' => 'required',
    ]);
    $blog = Blog::create([
        'name' => $request->name,
        'header' => $request->header,
        'launch_date' => $request->launch_date,
        'campaign_message' => $request->campaign_message,
        'description' => $request->description,
    ]);
    $images = $request->file('images');
    foreach ($images as $image) {
        $filename = $image->getClientOriginalName();
        $blog_image = time()."_blog-image".$filename;
        $image->move('uploads/blog-image', $blog_image);
        BlogImage::create([
            'blog_id' =>$blog->id,
            'image'=> $blog_image ,
        ]);
    }
    return redirect()->back()->with('success', 'Blog created successfully!');
}
public function delete_blog($id)
{

    $project = Blog::find($id);
    $project->blogImage()->delete(); 
    $project->delete();

    return redirect()->back()->with('success', 'Blog deleted successfully!');
}
public function benefit()
{
    $benefits = Benefit::orderBy('id','DESC')->get();
    return view('Admin.benefit',compact('benefits'));
}
public function add_benefit(Request $request)
{
 $request->validate([
    'name' => 'required|max:191',
    'detail' => 'required',
    'score_1_start' => 'required',
    'score_2_start' => 'required',
    'score_3_start' => 'required',
    'score_4_start' => 'required',
    'score_5_start' => 'required',
]);
 Benefit::create([
    'name' => $request->name,
    'details' => $request->detail,
    'score_1_start' => $request->score_1_start,
    'score_2_start' => $request->score_2_start,
    'score_3_start' => $request->score_3_start,
    'score_4_start' => $request->score_4_start,
    'score_5_start' => $request->score_5_start,
]);
 return redirect()->back()->with('success', 'Benefit created successfully!');
}
public function delete_benefit($id)
{
    Benefit::find($id)->delete($id);
    return redirect()->back()->with('success', 'Benefit deleted successfully!');
}
public function authorization()
{

    $customers = User::where('role_id',5)->orderBy('id', 'DESC')->get();
    return view('Admin.authorization',compact('customers'));
}
public function add_authorization(Request $request)
{
 $request->validate([
    'name' => 'required|max:191',
    'detail' => 'required',
    'score_1_start' => 'required',
    'score_2_start' => 'required',
    'score_3_start' => 'required',
    'score_4_start' => 'required',
    'score_5_start' => 'required',
]);
 Authorization::create([
    'name' => $request->name,
    'details' => $request->detail,
    'score_1_start' => $request->score_1_start,
    'score_2_start' => $request->score_2_start,
    'score_3_start' => $request->score_3_start,
    'score_4_start' => $request->score_4_start,
    'score_5_start' => $request->score_5_start,
]);
 return redirect()->back()->with('success', 'Authorization created successfully!');
}
public function delete_authorization($id)
{
    Authorization::find($id)->delete($id);
    return redirect()->back()->with('success', 'Authorization deleted successfully!');
}

}
