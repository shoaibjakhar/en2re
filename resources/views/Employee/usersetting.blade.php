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
                                         
                                                <div class="col-md-12">
                                                    <h4 class="">
                                                      <strong> User Setting</strong> 
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-md-12  justify-space-between">
                                                <div class="col-md-5 mb-40 box-bd">
                                                    <div class="portlet-body">
                                                    <h4>Bank Information 
                                                        <a class="pull-right" data-toggle="modal"
                                                        href="#add"><i class="bi bi-gear-fill"></i>
                                                        </a>
                                                    </h4>
                                                    <div class="col-md-12">
                                                        <label class="control-label left ">Bank Name
                                                        </label>
                                                          <input type="text" value="LOREM BANK" disabled class="form-control  " name="username1" />
                                                          <span> <i class="bi bi-bank ic-pos3 new gold"></i></span>
                                                      </div>
                                                    <div class="col-md-12">
                                                        <label class="control-label left ">Account No #
                                                        </label>
                                                          <input type="password" value="###########" disabled class="form-control  " name="username1" />
                                                          <span> <i class="bi bi-border-outer ic-pos3 new gold"></i></span>
                                                      </div>
                                                    <div class="col-md-12">
                                                        <label class="control-label left ">Bank ID #
                                                        </label>
                                                          <input type="password" value="###########" disabled class="form-control  " name="username1" />
                                                          <span> <i class="bi bi-credit-card ic-pos3 new gold"></i></span>
                                                      </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-5 mb-40 box-bd">
                                                    <div class="portlet-body">
                                                    <h4>Avatar setting 
                                                        <a class="pull-right" data-toggle="modal"
                                                        href="#addImg"><i class="bi bi-gear-fill"></i>
                                                        </a>
                                                    </h4>
                                                    <div class="col-md-12">
                                                        <label class="control-label left ">Avatar name 
                                                        </label>
                                                          <input type="text" value="Robert Alderson" disabled class="form-control  " name="username1" />
                                                          <span> <i class="bi bi-person-circle ic-pos3 new gold"></i></span>
                                                      </div>
                                                    <div class="col-md-12">
                                                        <label class="control-label left ">Picture
                                                        </label>
                                                          <img src="assets/img/preview.svg" class="block" width="100" alt="">
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

</main><!-- End #main -->
<div class="modal fade in" id="add" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal_width">
        <div class="modal-content">
            <div class="modal-header primary_bg font-white">
                <button type="button" class="close " data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Bank Information</h4>
            </div>
            <div class="modal-body">
                    <div class="portlet-body">
                    <div class="col-md-12">
                        <label class="control-label left ">Bank Name
                        </label>
                          <input type="text" placeholder="Name" class="form-control  " name="username1" />
                          <span> <i class="bi bi-bank ic-pos3 new gold"></i></span>
                      </div>
                    <div class="col-md-12">
                        <label class="control-label left ">Account No #
                        </label>
                          <input type="text" placeholder="###########" class="form-control  " name="username1" />
                          <span> <i class="bi bi-border-outer ic-pos3 new gold"></i></span>
                      </div>
                    <div class="col-md-12">
                        <label class="control-label left ">Bank ID #
                        </label>
                          <input type="text" placeholder="###########" class="form-control  " name="username1" />
                          <span> <i class="bi bi-credit-card ic-pos3 new gold"></i></span>
                      </div>
                    </div>
                <div class="form-actions col-md-12 float_center">
                    <br>
                    <a class="btn btn-primary" type="button">Add</a>

                    <a type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>

                </div>
            </div>
            <div class="modal-footer border-none">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade in" id="addImg" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal_width">
        <div class="modal-content">
            <div class="modal-header primary_bg font-white">
                <button type="button" class="close " data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Avatar Setting </h4>
            </div>
            <div class="modal-body">
                    <div class="portlet-body">
                    <div class="col-md-12">
                        <label class="control-label left ">Avatar Name
                        </label>
                          <input type="text" placeholder="Name" class="form-control  " name="username1" />
                          <span> <i class="bi bi-person-fill ic-pos3 new gold"></i></span>
                      </div>
             
                    <div class="col-md-12">
                        <label class="control-label left ">Picture Upload
                        </label>
                          <input type="file" class="form-control  " name="username1" />
                          <span> <i class="bi bi-person-circle ic-pos3 new gold"></i></span>
                      </div>
                    </div>
                <div class="form-actions col-md-12 float_center">
                    <br>
                    <a class="btn btn-primary" type="button">Add</a>

                    <a type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>

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