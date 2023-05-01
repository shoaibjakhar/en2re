@extends('Employee.employeelayouts')
@section('content')

<div class=" page-content-wrapper">
    <!-- start input -->
    <div class="page-content hero2">
        <div class="portlet light bordered " id="form_wizard_1">
            <div class="portlet-body form">
                <div class="row">

                    <div class="col-md-12 mx-0">
                        <div>
                            <div class="form-group ">

                                <div class="left">
                                    <div class="wrapper center-block">
                                        <div class="left">
                                            <div class="col-md-12 mb-40 box-bd">
                                                <div class="col-md-12 mb-40 box-bd">
                                                    <div class="portlet-body">
                                                        <h4>Blog/Feed Inbox</h4>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Blog Name</label>
                                                            <input type="text" value="" class="form-control" name="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Blog Header</label>
                                                            <input type="text" value="" class="form-control" name="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Launch Date</label>
                                                            <input type="date" value="" class="form-control" name="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Campaign Message	</label>
                                                            <input type="text" value="" class="form-control" name="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Text Body </label>
                                                            <input type="text" value="" class="form-control" name="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Pictures </label><br>
                                                            <input type="file" src="" alt="Submit" class="form-control" width="48" height="48">
                                                        </div>
                                                    </div>
                                                    <button type="submit" value="" class="btn btn-primary col-md-2 mt-4" style="margin-left: 40%">Submit</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="row">

                    <div class="col-md-12 mx-0">
                        <div>
                            <div class="form-group ">

                                <div class="left">
                                    <div class="wrapper center-block">
                                        <div class="left">
                                            <div class="col-md-12 mb-40 box-bd">

                                                <div class="col-md-8">
                                                    <h4 class="">
                                                        <strong>Blog/Feed View</strong>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-40 box-bd">
                                                <div class="portlet-body filter-none">
                                                    <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                        <div class="table Add">
                                                            <div class="table-scrollable">
                                                                <table class="table table-hover  order-column dataTable" role="grid" aria-describedby="sample_5_info">
                                                                    <thead>
                                                                        <tr class="secondary_bg font-white">
                                                                            <th style="width: 88px;">ID</th>
                                                                            <th style="width: 88px;">
                                                                                Blog Name
                                                                            </th>
                                                                            <th style="width: 88px;"> Blog Header
                                                                            </th>

                                                                            <th style="width: 59px;"> Launch Date
                                                                            </th>
                                                                            <th style="width: 59px;"> Campaign Message
                                                                            </th>
                                                                            <th style="width: 59px;"> Text Body
                                                                            </th>
                                                                            <th style="width: 59px;"> Pictures
                                                                            </th>
                                                                            <th style="width: 59px;">
                                                                                Action
                                                                            </th>


                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                            <td class="ft-16"><b> 3</b>
                                                                            </td>
                                                                            <td class="ft-16">Zubair</td>
                                                                            <td class="ft-16">Bold</td>
                                                                            <td class="ft-16">12-23-2002
                                                                            </td>
                                                                            <td class="ft-16">
                                                                                Hello Micle</td>
                                                                            <td class="ft-16">175 letters</td>
                                                                            <td class="ft-16"><img src="{{ asset('./assets/img/web.jpg') }}" class="highlight4" height="24" width="24" alt=""></td>
                                                                            <td class="ft-16">
                                                                                <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                            </td>

                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <table class="collapse in table table-hover  order-column dataTable" id="sample_5" role="grid" aria-describedby="sample_5_info">

                                                                <thead>
                                                                    <tr role="row " class="secondary_bg font-white">
                                                                       <th>ID</th>
                                                                        <th style="">
                                                                            Blog Name
                                                                        </th>
                                                                        <th style=""> Blog Header
                                                                        </th>

                                                                        <th style=""> Launch Date
                                                                        </th>
                                                                        <th style=""> Campaign Message
                                                                        </th>
                                                                        <th style=""> Text Body
                                                                        </th>
                                                                        <th style=""> Pictures
                                                                        </th>


                                                                        <th class=" " tabindex="0" aria-controls="sample_4" rowspan="1" colspan="1" aria-label=" action : activate to sort column ascending" style="width: 59px;"> Actions
                                                                        </th>


                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 2</b>
                                                                        </td>
                                                                        <td class="ft-16">Zahid</td>
                                                                        <td class="ft-16">Bold</td>
                                                                        <td class="ft-16">12-23-2002
                                                                        </td>
                                                                        <td class="ft-16">
                                                                            Hello Micle</td>
                                                                        <td class="ft-16">175 letters</td>
                                                                        <td class="ft-16"><img src="{{ asset('./assets/img/web.jpg') }}" class="highlight4" height="24" width="24" alt=""></td>
                                                                        <td class="ft-16">
                                                                            <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                        </td>

                                                                    </tr>

                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">Zafar</td>
                                                                        <td class="ft-16">Bold</td>
                                                                        <td class="ft-16">12-23-2002
                                                                        </td>
                                                                        <td class="ft-16">
                                                                            Hello Micle</td>
                                                                        <td class="ft-16">175 letters</td>
                                                                        <td class="ft-16"><img src="{{ asset('./assets/img/web.jpg') }}" class="highlight4" height="24" width="24" alt=""></td>
                                                                        <td class="ft-16">
                                                                            <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                        </td>

                                                                    </tr>


                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 3</b>
                                                                        </td>
                                                                        <td class="ft-16">Zubair</td>
                                                                        <td class="ft-16">Bold</td>
                                                                        <td class="ft-16">12-23-2002
                                                                        </td>
                                                                        <td class="ft-16">
                                                                            Hello Micle</td>
                                                                        <td class="ft-16">175 letters</td>
                                                                        <td class="ft-16"><img src="{{ asset('./assets/img/web.jpg') }}" class="highlight4" height="24" width="24" alt=""></td>
                                                                        <td class="ft-16">
                                                                            <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                        </td>

                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end input -->
</div>
{{--  
<div class=" page-content-wrapper">

    <div class="page-content hero2">
        <div class="portlet light bordered " id="form_wizard_1">
            <div class="portlet-body form">
                <div class="row">

                    <div class="col-md-12 mx-0">
                        <div>
                            <div class="form-group ">

                                <div class="left">
                                    <div class="wrapper center-block">
                                        <div class="left">
                                            <div class="col-md-12 mb-40 box-bd">
                                                <div class="col-md-2">
                                                        <img src="assets/img/log.png" class="w-100" alt="">
                                                </div>
                                                <div class="col-md-8">
                                                    <h2 class="">
                                                      <strong> HERBST SPEZIAL - 7% Verzinsung, nur noch bis 31.12.2022</strong> 
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-40 box-bd">
                                                <h4 class="">
                                                    <strong> Blog / Feed</strong> 
                                                  </h4>

                                            </div>
                                            
                                            <div class="col-md-12 mb-40 box-bd">
                                            <div class="col-md-4">
                                                <div class="portlet light bordered blog">
                                                    <span class="fl-right mb-10"><small>19 hours ago</small> </span>
                                                  <img src="assets/img/key.jpg" class="w-100" alt="">
                                                  <div class="blog2">
                                                  <h3 class="text-center"><i class="bi bi-wifi"></i></h3>
                                                  <h5 ><b>60+ Best Free Keynote Templates 2022</b></h5>
                                                  <h6>Today we’re bringing you a collection of the best free Keynote templates for making all kinds of presentation... </h6>
                                                </div>
                                                  <div class=" Center space-bet mt-2">
                                                    <a class="block" href="#">
                                                      Read More</a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="portlet light bordered blog">
                                                    <span class="fl-right mb-10"><small>12 hours ago</small> </span>
                                                  <img src="assets/img/key2.jpg" class="w-100" alt="">
                                                  <div class="blog2">
                                                  <h3 class="text-center"><i class="bi bi-wifi"></i></h3>
                                                  <h5 ><b>9 Tips for a Great Newsletter Signup Design</b></h5>
                                                  <h6>If newsletter signups are one of the desired conversions on your website, a great design is vital...</h6>
                                                  </div>
                                                  <div class=" Center space-bet mt-2">
                                                    <a class="block" href="#">
                                                      Read More</a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="portlet light bordered blog">
                                                    <span class="fl-right mb-10"><small>22 hours ago</small> </span>
                                                  <img src="assets/img/key3.jpg" class="w-100" alt="">
                                                  <div class="blog2">
                                                  <h3 class="text-center"><i class="bi bi-wifi"></i></h3>
                                                  <h5 ><b>20+ Best Nautical Fonts (Sea + Sailing Style Fonts)</b></h5>
                                                  <h6>The nautical style of design is one of the most popular trends used in many different types of designs, including...</h6>
                                                  </div>
                                                  <div class=" Center space-bet mt-2">
                                                    <a class="block" href="#">
                                                      Read More</a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="portlet light bordered blog">
                                                    <span class="fl-right mb-10"><small>1 day ago</small> </span>
                                                  <img src="assets/img/key4.jpg" class="w-100" alt="">
                                                  <div class="blog2">
                                                  <h3 class="text-center"><i class="bi bi-wifi"></i></h3>
                                                  <h5 ><b>20+ Best Consulting + Management PowerPoint</b></h5>
                                                  <h6>A killer presentation is the main weapon in a consultant’s arsenal. It’s the best tool you can use to convince...</h6>
                                                  </div>
                                                  <div class=" Center space-bet mt-2">
                                                    <a class="block" href="#">
                                                      Read More</a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="portlet light bordered blog">
                                                    <span class="fl-right mb-10"><small>2 day ago</small> </span>
                                                  <img src="assets/img/key5.png" class="w-100" alt="">
                                                  <div class="blog2">
                                                  <h3 class="text-center"><i class="bi bi-wifi"></i></h3>
                                                  <h5 ><b>30+ Best Adobe XD Icons + Icon Sets (+ How to Add Them)</b></h5>
                                                  <h6>One of the most commonly used elements in UI design is icons. As a UX or UI designer, you can never have...</h6>
                                                  </div>
                                                  <div class=" Center space-bet mt-2">
                                                    <a class="block" href="#">
                                                      Read More</a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="portlet light bordered blog">
                                                    <span class="fl-right mb-10"><small>1 day ago</small> </span>
                                                  <img src="assets/img/key6.png" class="w-100" alt="">
                                                  <div class="blog2">
                                                  <h3 class="text-center"><i class="bi bi-wifi"></i></h3>
                                                  <h5 ><b>Readymag: Create a Website Right in a Browser</b></h5>
                                                  <h6>Whether you are a beginner or an experienced web designer that needs to create a site that looks great ...</h6>
                                                  </div>
                                                  <div class=" Center space-bet mt-2">
                                                    <a class="block" href="#">
                                                      Read More</a>
                                                  </div>
                                                </div>
                                            </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </section> -->
<!-- </main>End #main -->
<div class="modal fade in" id="edit-fd" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog modal_width">
<div class="modal-content">
    <div class="modal-header ">
        <button type="button" class="close " data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Edit Details </h4>
    </div>
    <div class="modal-body">
        <div class="form-body">
            <div class="col-md-6">
                <label class="control-label "> Application ID
                </label>
                <input type="text" name="name1" placeholder="122222" disabled class="form-control pd-0_5" />
            </div>
            <div class="col-md-6">
                <label class="control-label "> Submitted On
                </label>
                <input type="text" name="name1" placeholder="Submitted On" class="form-control pd-0_5" />
            </div>
            <div class="col-md-6">
                <label class="control-label "> Status
                </label>
                <input type="text" name="name1" placeholder="Status" class="form-control pd-0_5" />
            </div>
            <div class="col-md-6">
                <label class="control-label "> Amount
                </label>
                <input type="text" name="name1" placeholder=" Amount " class="form-control pd-0_5" />
            </div>

            <div class="col-md-6">
                <label class="control-label ">Issued On
                </label>
                <input type="text" name="name1" placeholder="Date" class="form-control pd-0_5" />
            </div>



            <div class="form-actions col-md-12 float_center">
                <br>
                <a class="btn btn-primary" type="button">Edit</a>

                <a type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>

            </div>

        </div>
    </div>
    <div class="modal-footer border-none">

    </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade in" id="delete" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title ">Delete</h4>
    </div>
    <div class="modal-body"> Do you want to delete ? </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>
    </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade in" id="color" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog" style="width: 390px;">
<div class="modal-content">
    <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title ">Add your color theme....! </h4>
    </div>
    <div class="modal-body">
        Select Color :
        <input type="color" value="#006699">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Select</button>
        <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
    </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>  --}}


@endsection 