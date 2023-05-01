<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EMController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
	return view('auth.login');
});


// <-----ADMIN ROUTE----->
Route::group(['prefix'=>'admin/'],function(){
	Route::get('/dashboard',[AdminController::class,'dashboard']);
	Route::get('/onboarding',[AdminController::class,'onboard']);
	Route::get('/dashboard',[AdminController::class,'dashboard']);
	Route::get('/ideation',[AdminController::class,'ideation']);
	Route::get('/emission',[AdminController::class,'emission'])->name('emission');
	Route::post('/add-customer',[AdminController::class,'add_customer'])->name('admin.add-customer');
	Route::get('/delete/customer/{id}',[AdminController::class,'delete_customer'])->name('admin.customer.delete');
	Route::post('/add-ideation',[AdminController::class,'add_ideation'])->name('admin.add-ideation');
	Route::get('/delete/ideation/{id}',[AdminController::class,'delete_ideation'])->name('admin.ideation.delete');
	Route::post('/add-emission',[AdminController::class,'add_emission'])->name('admin.add-emission');
	Route::get('/delete/emission/{id}',[AdminController::class,'delete_emission'])->name('admin.emission.delete');


	Route::get('/project',[AdminController::class,'project']);
	Route::post('/add-project',[AdminController::class,'add_project'])->name('admin.add-project');
	Route::get('/delete/project/{id}',[AdminController::class,'delete_project'])->name('admin.project.delete');
	Route::get('project/edit/{id}',[AdminController::class,'edit_project'])->name('admin.project.edit');
	Route::post('project/update',[AdminController::class,'update_project'])->name('admin.update-project');

	// Route::get('/blog',[AdminController::class,'blog']);
	// Route::post('/add-blog',[AdminController::class,'add_blog'])->name('admin.add-blog');
	// Route::get('/delete/blog/{id}',[AdminController::class,'delete_blog'])->name('admin.blog.delete');
	Route::get('/benefit',[AdminController::class,'benefit']);
	Route::post('/add-benefit',[AdminController::class,'add_benefit'])->name('admin.add-benefit');
	Route::get('/delete/benefit/{id}',[AdminController::class,'delete_benefit'])->name('admin.benefit.delete');
	Route::get('/authorization',[AdminController::class,'authorization']);
	Route::post('/add-authorization',[AdminController::class,'add_authorization'])->name('admin.add-authorization');
	Route::get('/delete/authorization/{id}',[AdminController::class,'delete_authorization'])->name('admin.authorization.delete');






});
// <-----END ADMIN----->


//    <-----EM ROUTE----->

Route::group(['prefix'=>'em/'],function(){
	Route::get('/dashboard',[EMController::class,'dashboard' ])->name('em.dashboard');
	Route::get('/decarbo',[EMController::class,'decarbo' ]);

	Route::get('/decarboproject',[EMController::class,'decarboproject' ])->name('em.decarboproject');
	Route::get('/ideation/edit/{id}',[EMController::class,'edit_ideation'])->name('em.ideation.edit');
	Route::post('ideation/update',[EMController::class,'update_ideation'])->name('em.update-ideation');

	Route::get('/decarbo',[EMController::class,'decarbo' ]);
	Route::post('/add-project',[EMController::class,'add_project'])->name('em.add-project');
	Route::get('/delete/project/{id}',[EMController::class,'delete_project'])->name('em.project.delete');

	Route::get('/project/approved/request/{id}',[EMController::class,'project_approved_request'])->name('em.project.approved.request');


});
 //  <------EM END----->


//  <----HR ROUTE----->

Route::get('HR/dashboard',[HRController::class, 'dashboard']);
Route::get('HR/blogupload',[HRController::class, 'blogupload']);

Route::group(['prefix'=>'setting/'],function(){
	Route::get('/authorize',[HRController::class, 'autho'])->name('setting/authorize');
	Route::get('/benefit',[HRController::class, 'benefit']);
	Route::get('/participent',[HRController::class, 'participent']);
	Route::get('/interest',[HRController::class, 'interest']);
	Route::get('/interestuser',[HRController::class, 'interestuser']);
	Route::get('/faqitem',[HRController::class, 'faqitem']);
	Route::get('/faq',[HRController::class, 'faq']);
});

Route::group(['prefix'=>'hr/'],function(){

	Route::get('/blog',[HRController::class,'blog'])->name('hr.blog');
	Route::post('/add-blog',[HRController::class,'add_blog'])->name('hr.add-blog');
	Route::get('/delete/blog/{id}',[HRController::class,'delete_blog'])->name('hr.blog.delete');

	Route::get('hr/dashboard',[HRController::class, 'dashboard'])->name('dashboard');
	Route::post('/add-faq',[HRController::class,'add_faq'])->name('hr.add-faq');
	Route::get('/delete/faq/{id}',[HRController::class,'delete_faq'])->name('hr.faq.delete');

	
});
// <------END HR---->


// <-----Employee ROUTE---->
Route::group(['prefix'=>'employee/'],function(){
	Route::get('/Overview',[EmployeeController::class,'overview'])->name('employee.overview');
	Route::get('/layout',[EmployeeController::class,'layout']);
	Route::get('/changepassword',[EmployeeController::class,'changepassword']);
	Route::get('/usersetting',[EmployeeController::class,'usersetting']);
	
	Route::get('/emission',[EmployeeController::class,'emission']);
	Route::get('/transections',[EmployeeController::class,'transections']);
	Route::get('/interest',[EmployeeController::class,'interest']);
	Route::get('/impact',[EmployeeController::class, 'impact']);
	Route::get('/project',[EmployeeController::class, 'project']);
	Route::get('/roadmap',[EmployeeController::class, 'roadmap']);
	Route::get('/blog',[EmployeeController::class, 'blog']);
	Route::get('/ranking',[EmployeeController::class, 'ranking']);
	Route::get('/score',[EmployeeController::class, 'score']);
	Route::get('/faq',[EmployeeController::class, 'faq'])->name('employee.faq');
	// Route::get('sale',[EmployeeController::class,'sales'])->name('employee.sale');
	
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
