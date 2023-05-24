@extends('Employee.employeelayouts')
@section('content')

     


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
                                                <div class="portlet-body">
                                                    <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                        <div class="table">

                                                            <table
                                                                class="table table-hover  order-column dataTable"
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
                                                                            #Amount of Transactions </th>
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
                                                                            style="width: 59px;"> Interest received (total)
                                                                        </th>
                                                                        <th class="  " tabindex="0"
                                                                            aria-controls="sample_4"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label=" action : activate to sort column ascending"
                                                                            style="width: 59px;"> Interest received (next)
                                                                        </th>
                                                                        <th class="  " tabindex="0"
                                                                            aria-controls="sample_4"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label=" action : activate to sort column ascending"
                                                                            style="width: 59px;"> Interest receiving date 
                                                                        </th>
                                                                        <th class=" " tabindex="0"
                                                                            aria-controls="sample_4"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label=" action : activate to sort column ascending"
                                                                            style="width: 59px;"> Your Share of Total Emitted Volume 
                                                                        </th>
                                                                       

                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="gradeX odd" role="row">
                                                                        <td >{{isset($number_of_transection)? $number_of_transection:'N/A'}}</td>
                                                                        <td >${{isset($totat_investment_amount)? $totat_investment_amount:'N/A'}}</td>
                                                                        <td >N/A</td>
                                                                        <td >N/A
                                                                        </td>
                                                                        <td >
                                                                            N/A</td>
                                                                        <td >N/A</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12 mb-40 box-bd" style="display: none">
                                                <div class="col-md-4">
                                                    <h6 class="">
                                                         Web Cam
                                                      </h6>
                                                        <div>
                                                            <img src="assets/img/web.jpg" class="img-res" alt="">
                                                        </div>
                                                 </div>
                                                <div class="col-md-8 ">
                                                    <h6 class="">
                                                       Treemap
                                                     </h6>
                                                    <div id="chart_div3"></div>
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
</div>

@endsection