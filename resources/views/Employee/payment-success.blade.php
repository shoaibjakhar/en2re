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

                     <div class="wrapper center-block">
                      <div class="left">
                        <div class="col-md-12  justify-space-between">
                         <div class="col-md-12 mb-40 box-bd">
                           <div class="alert-success pl-40">
                             <h4>You're transection done successfully!</h4>
                              <a href="{{route('employee.transections')}}">See you're transection list</a>
                           </div>
                           <div>
                           
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

@endsection