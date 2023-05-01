@extends('Employee.employeelayouts')
@section('content')
<!-- start database table -->
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
                                                <div class="col-md-8">
                                                    <h4 class="">
                                                        <strong>Emission Input & View</strong>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- start database form -->
                                            {{--  <div class="col-md-8 mb-40 box-bd">
                                                <div class="portlet-body filter-none">
                                                    <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                        <div class="table Add">
                                                            <div class="table-scrollable">
                                                                <table class="table table-hover  order-column dataTable" role="grid" aria-describedby="sample_5_info">
                                                                    <thead>
                                                                        <tr class="secondary_bg font-white">

                                                                            <th style="width: 88px;">
                                                                                Check Mark 1
                                                                            </th>
                                                                            <th style="width: 88px;"> Tested
                                                                            </th>

                                                                            <th style="width: 59px;"> Check Mark 2
                                                                            </th>
                                                                            <th style="width: 59px;"> Emission date
                                                                            </th>
                                                                            <th style="width: 59px;"> Action
                                                                            </th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                            <td class="ft-16"><b> 3</b>
                                                                            </td>
                                                                            <td class="ft-16">10.000.000 €</td>
                                                                            <td class="ft-16">3.500.000 €</td>
                                                                            <td class="ft-16">3.500.000 €</td>
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

                                                                        <th style="width: 88px;">
                                                                            Check Mark 1
                                                                        </th>
                                                                        <th style="width: 88px;"> Tested
                                                                        </th>

                                                                        <th style="width: 59px;"> Check Mark 2
                                                                        </th>
                                                                        <th style="width: 59px;"> Emission date
                                                                        </th>
                                                                        <th style="width: 59px;"> Action
                                                                        </th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="gradeX odd" role="row">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">1.000.000 €</td>

                                                                        <td class="ft-16">Refinancing of 100kW PV Rooftop</td>
                                                                        <td class="ft-16">Refinancing of 100kW PV Rooftop</td>
                                                                        <td class="ft-16">
                                                                            <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size: 20px;;color: black;"></i></a>
                                                                            <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 20px;color: black; margin-top: 20px;"></span></a>
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="gradeX odd" role="row">

                                                                        <td class="ft-16"><b> 2</b>
                                                                        </td>
                                                                        <td class="ft-16">4.000.000 €</td>

                                                                        <td class="ft-16">
                                                                            2/11/2023</td>
                                                                        <td class="ft-16">Financing of 300kW PV Rooftop </td>
                                                                        <td class="ft-16">
                                                                            <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size: 20px;;color: black;"></i></a>
                                                                            <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 20px;color: black; margin-top: 20px;"></span></a>
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="gradeX odd" role="row">

                                                                        <td class="ft-16"><b> 3</b>
                                                                        </td>
                                                                        <td class="ft-16">5.000.000 €</td>

                                                                        <td class="ft-16">
                                                                            1/9/2023</td>
                                                                        <td class="ft-16">....</td>

                                                                        <td class="ft-16">
                                                                            <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size: 20px;;color: black;"></i></a>
                                                                            <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 20px;color: black; margin-top: 20px;"></span></a>
                                                                        </td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>  --}}
                                            <!-- start form -->
                                            <div class="col-md-8 mb-40 box-bd">
                                                <div class="portlet-body">
                                                    <h4>Emission Form</Form>
                                                    </h4>
                                                    <div class="col-md-12">
                                                        <label class="control-label left ">Tested by</label>
                                                        <input type="text" value="" class="form-control" name="" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="control-label left">Emission Date</label>
                                                        <input type="date" value="" class="form-control" name="" />
                                                    </div>
                                                    <div class="col-md-6 mt-4">
                                                        <label class="control-label left">Api Implemented </label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>

                                                    <div class="col-md-6 mt-4">
                                                        <label class="control-label left">Emission amount confirmed </label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>
                                                    <button class="btn btn-primary mt-4" style="margin-left: 300px;">Submit</button>
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
    <!-- end database table 1 -->
</div>
<!-- start database table -->
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
                                                <div class="col-md-8">
                                                    <h4 class="">
                                                        <strong>Emission View</strong>
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- start database form -->
                                            <div class="col-md-12 mb-40 box-bd">
                                                <div class="portlet-body filter-none">
                                                    <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                        <div class="table Add">
                                                            <div class="table-scrollable">
                                                                <table class="table table-hover  order-column dataTable" role="grid" aria-describedby="sample_5_info">
                                                                    <thead>
                                                                        <tr class="secondary_bg font-white">

                                                                             <th style="width:20%;"> ID</th>
                                                                            <th style="width:20%;"> Tested By
                                                                            </th>

            
                                                                            <th style="width:20%;"> Emission date
                                                                            </th>
                                                                            <th style="width:20%;"> Api Implemented
                                                                            </th>
                                                                            <th style="width:20%;">
                                                                                Emission Amount Confirmed
                                                                            </th>
                                                                            <th> Action</th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                            <td class="ft-16"><b> 1</b>
                                                                            </td>
                                                                            <td class="ft-16">Zahid</td>
                                                                            <td class="ft-16">12-23-20023</td>
                                                                            <td class="ft-16">Yes</td>
                                                                            <td class="ft-16">
                                                                                NO
                                                                               
                                                                            </td>
                                                                            <td><i class="bi bi-caret-up-fill" aria-hidden="true"></i></td>

                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <table class="collapse in table table-hover  order-column dataTable" id="sample_5" role="grid" aria-describedby="sample_5_info">

                                                                <thead>
                                                                    <tr role="row " class="secondary_bg font-white">

                                                                        <th style="">
                                                                            ID
                                                                        </th>
                                                                        <th style=""> Tested By
                                                                        </th>

                                                                        <th > Emission Date
                                                                        </th>
                                                                        <th >Api implemented
                                                                        </th>
                                                                        <th>Emission Account Confirmed</th>
                                                                        <th style="width: 59px;"> Action
                                                                        </th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">Zahid</td>
                                                                        <td class="ft-16">12-23-20023</td>
                                                                        <td class="ft-16">Yes</td>
                                                                        <td class="ft-16">
                                                                            NO
                                                                           
                                                                        </td>
                                                                        <td><i class="bi bi-caret-up-fill" aria-hidden="true"></i></td>

                                                                    </tr>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">Zahid</td>
                                                                        <td class="ft-16">12-23-20023</td>
                                                                        <td class="ft-16">Yes</td>
                                                                        <td class="ft-16">
                                                                            NO
                                                                           
                                                                        </td>
                                                                        <td><i class="bi bi-caret-up-fill" aria-hidden="true"></i></td>

                                                                    </tr>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">Zahid</td>
                                                                        <td class="ft-16">12-23-20023</td>
                                                                        <td class="ft-16">Yes</td>
                                                                        <td class="ft-16">
                                                                            NO
                                                                           
                                                                        </td>
                                                                        <td><i class="bi bi-caret-up-fill" aria-hidden="true"></i></td>

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
    <!-- end database table 1 -->
</div>






{{--  <div class=" page-content-wrapper">

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
                                                
                                                <div class="col-md-8">
                                                    <h4 class="">
                                                      <strong> Emissions</strong> 
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-40 box-bd">
                                                <div class="portlet-body filter-none">
                                                    <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                        <div class="table Add">
                                                                <div class="table-scrollable">
                                                            <table class="table table-hover  order-column dataTable" role="grid"
                                                            aria-describedby="sample_5_info">
                                                            <thead>
                                                                <tr
                                                                    class="secondary_bg font-white">

                                                                    <th 
                                                                        style="width: 88px;">
                                                                        #Amount of Emission
                                                                    </th>
                                                                    <th 
                                                                        style="width: 88px;"> Total Emitted Volume
                                                                    </th>

                                                                    <th 
                                                                        style="width: 59px;"> Available Emitted Volume
                                                                    </th>
                                                                    <th 
                                                                        style="width: 59px;"> Interest remaining (total) (est.)
                                                                    </th>
                                                                    <th 
                                                                        style="width: 59px;"> Remaining Share of Emitted Volume 
                                                                    </th>
                                                                    <th 
                                                                        style="width: 59px;"> Time remaining (est.)  
                                                                    </th>
                                                                    <th 
                                                                        style="width: 59px;"> 
                                                                    </th>
                                                                   

                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                    <td class="ft-16"><b> 3</b>
                                                                    </td>
                                                                    <td class="ft-16">10.000.000 €</td>
                                                                    <td class="ft-16">3.500.000 €</td>
                                                                    <td class="ft-16">175.000 €
                                                                    </td>
                                                                    <td class="ft-16">
                                                                        35%</td>
                                                                    <td class="ft-16">175 days</td>
                                                                    <td class="ft-16">
                                                                        <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                    </td>

                                                                </tr>

                                                            </tbody>
                                                            </table>
                                                                </div>
                                                            <table  class="collapse in table table-hover  order-column dataTable"
                                                                id="sample_5" role="grid"
                                                                aria-describedby="sample_5_info">
                                                              
                                                                <thead>
                                                                    <tr role="row "
                                                                        class="secondary_bg font-white">

                                                                        <th class="sorting_asc  "
                                                                            tabindex="0"
                                                                            aria-controls="sample_5"
                                                                            rowspan="1" colspan="1"
                                                                            aria-sort="ascending"
                                                                            aria-label=" Auditor : activate to sort column descending"
                                                                            style="width: 88px;">
                                                                            #No. of Emission </th>
                                                                        <th class="" tabindex="0"
                                                                            aria-controls="sample_4"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label=" Name : activate to sort column ascending"
                                                                            style="width: 88px;"> Your Total
                                                                            Investment  </th>

                                                                  
                                                                        <th class="  " tabindex="0"
                                                                            aria-controls="sample_4"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label=" action : activate to sort column ascending"
                                                                            style="width: 59px;"> Date of Emission 
                                                                        </th>
                                                                        <th class=" " tabindex="0"
                                                                            aria-controls="sample_4"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label=" action : activate to sort column ascending"
                                                                            style="width: 59px;"> Project linked to Emission 
                                                                        </th>
                                                                       

                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="gradeX odd" role="row">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">1.000.000 €</td>
                                                                       
                                                                        <td class="ft-16">
                                                                            1/12/2023</td>
                                                                        <td class="ft-16">Refinancing of 100kW PV Rooftop</td>
                                                                       

                                                                    </tr>
                                                                    <tr class="gradeX odd" role="row">

                                                                        <td class="ft-16"><b> 2</b>
                                                                        </td>
                                                                        <td class="ft-16">4.000.000 €</td>
                                                                       
                                                                        <td class="ft-16">
                                                                            2/11/2023</td>
                                                                        <td class="ft-16">Financing of 300kW PV Rooftop </td>
                                                                       

                                                                    </tr>
                                                                    <tr class="gradeX odd" role="row">

                                                                        <td class="ft-16"><b> 3</b>
                                                                        </td>
                                                                        <td class="ft-16">5.000.000 €</td>
                                                                       
                                                                        <td class="ft-16">
                                                                            1/9/2023</td>
                                                                        <td class="ft-16">....</td>
                                                                       

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
</div>

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

     

{{--  <script>
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
    });
</script>


<script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>

<script>
    $('.nav-item').on('click', function () {
        $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();
    }, function () {
        $(this).find('.sub-menu').first().stop(true, true).delay(200).slideUp()
    });
</script>  --}}
  
@endsection