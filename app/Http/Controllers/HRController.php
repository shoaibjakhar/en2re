<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\Blog;
use App\Models\BlogImage;

class HRController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard(){

        return view('HR.dashboard');

    }

    public function blogupload(){

        return view('HR.blogupload');

    }

    public function blog()
    {
        $blogs = Blog::orderBy('id','DESC')->get();
        return view('HR.blogupload',compact('blogs'));
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
            'customer_id' => auth()->user()->customer_id,
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
    
    public function autho(){

        return view('HR.authorize');

    }

    public function benefit(){

        return view('HR.benefit');

    }

    public function participent(){

        return view('HR.participent_rights');

    }

    public function interest(){

        return view('HR.interest');

    }

    public function interestuser(){

        return view('HR.interestuser');

    }

    public function faqitem(){
        $faqs = FAQ::orderBy('id','desc')->get();
        return view('HR.faqitem',compact('faqs'));

    }
    public function add_faq(Request $request)
    {
       // return $request->input();
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $blog = FAQ::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->back()->with('success', 'FAQ item created successfully!');
    }
    public function delete_faq($id)
    {
        FAQ::find($id)->delete($id);
        return redirect()->back()->with('success', 'FAQ deleted successfully!');
    }

    public function faq(){
        $faqs = FAQ::orderBy('id','asc')->get();
        return view('HR.faq',compact('faqs'));

    }



}

?>