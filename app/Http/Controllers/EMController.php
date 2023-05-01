<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ideation;
use App\Models\Currency;
use App\Models\Project;
use App\Models\ProjectImage;

class EMController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }



     public function layouts(){
    
        return view('EM.EMlayouts');
     }

     public function dashboard(){
    
        return view('EM.emdashboard');
     }

     public function decarbo(){
        $types = Ideation::select('type')->orderBy('type', 'asc')->groupBy('type')->get();
        $attributes = Ideation::select('attribute')->orderBy('attribute', 'asc')->groupBy('attribute')->get();
        $currencies = Currency::select('id','symbol')->orderBy('symbol', 'asc')->get();
        $projects = Project::orderBy('id', 'desc')->get();

        return view('EM.emdecarbo',compact('projects','types','attributes','currencies'));
     }

     public function decarboproject(){
        $ideations = Ideation::orderBy('id', 'desc')->get();
        return view('EM.emdecarbproject',compact('ideations'));
     }
     public function edit_ideation($id)
     {
      
        $ideation_edit =Ideation::where('id',$id)->first();
       // return $ideation_edit;
        $ideations = Ideation::orderBy('id', 'desc')->get();
        return view('EM.emdecarbproject',compact('ideations','ideation_edit'));
     }
     public function update_ideation(Request $request)
     {
          $request->validate([
            'target_launch_date' => 'required|max:50',
            'epc_responsibility_classification' => 'required',
        ]);
        //return $request->input();
        $ideation =Ideation::find($request->id);
        $ideation->target_launch_date  = $request->target_launch_date;
        $ideation->epc_responsibility_classification  = $request->epc_responsibility_classification;
        $ideation->save();
        return redirect()->route('em.decarboproject')->with('success', 'Ideation updated successfully!');
     }
     public function project (){

    $types = Ideation::select('type')->orderBy('type', 'asc')->groupBy('type')->get();
    $attributes = Ideation::select('attribute')->orderBy('attribute', 'asc')->groupBy('attribute')->get();
    $currencies = Currency::select('id','symbol')->orderBy('symbol', 'asc')->get();
    $projects = Project::orderBy('id', 'desc')->get();
    return view('Admin.project',compact('projects','types','attributes','currencies'));
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
public function project_approved_request($id)
{
    $project =Project::find($id);
    $project->status  = 3;
    $project->save();
    return redirect()->back()->with('success', 'Project approved request send successfully!');
}
public function delete_project($id)
{

    $project = Project::find($id);
    $project->projectImage()->delete(); 
    $project->delete();

    return redirect()->back()->with('success', 'Project deleted successfully!');
}
}
