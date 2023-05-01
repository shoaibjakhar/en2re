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
                                                                    <strong>Project List</strong>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-40 box-bd">
                                                          <div class="portlet-body filter-none">
                                                            <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                              <div class="table Add">
                                                                 <div class="table-scrollable">
                                                                    <table class="collapse in table table-hover  order-column dataTable" id="sample_5" role="grid" aria-describedby="sample_5_info">

                                                                      <thead>
                                                                        <tr role="row " class="secondary_bg font-white">

                                                                          <th style="">
                                                                            SR.NO
                                                                        </th>
                                                                        <th style="">
                                                                            Project Name
                                                                        </th>
                                                                        <th style=""> Detail
                                                                        </th>

                                                                        <th style="">Type
                                                                        </th>
                                                                        <th style="">
                                                                            Attribute
                                                                        </th>
                                                                        <th style="">
                                                                            Investment Amount
                                                                        </th>
                                                                        <th style="">
                                                                            GHG Reduction Classification
                                                                        </th>
                                                                        <th style="">
                                                                            End Use Energy Classification
                                                                        </th>
                                                                        <th style=""> Tested By
                                                                        </th>
                                                                        <th style=""> Emission Date
                                                                        </th>
                                                                        <th style=""> Api Implemented
                                                                        </th>
                                                                        <th style="">
                                                                            Emission Amount Confirmed
                                                                        </th>
                                                                        <th style="">
                                                                            Invoice EPC
                                                                        </th>
                                                                        <th style="">
                                                                            Sign Off
                                                                        </th>
                                                                        <th style="">
                                                                            API URL
                                                                        </th>
                                                                        <th style="">
                                                                         Webcam URL
                                                                     </th>
                                                                     <th>Status</th>
                                                                     <th>Action</th>
                                                                 </tr>
                                                             </thead>

                                                             <tbody>
                                                              @foreach($projects as $key=> $project)

                                                              <tr class="gradeX odd" role="row">

                                                                <td class="">{{($key+1)}}
                                                                </td>
                                                                <td class="">{{isset($project->name)?$project->name:''}}</td>
                                                                <td class="">{{isset($project->detail)?$project->detail:''}}</td>
                                                                <td class="">{{isset($project->type)?$project->type:''}}</td>
                                                                <td class="">{{isset($project->attribute)?$project->attribute:''}}</td>
                                                                <td class="">{{isset($project->currency->symbol)?$project->currency->symbol:''}}{{isset($project->investment_amount)?$project->investment_amount:''}}</td>
                                                                <td class="">{{isset($project->ghg_reduction_classification)?$project->ghg_reduction_classification:''}}</td>
                                                                <td class="">{{isset($project->end_use_energy_classification)?ucfirst($project->end_use_energy_classification):''}}</td>

                                                                <td class="">{{isset($project->tested_by)?$project->tested_by:''}}</td>
                                                                <td class="">{{isset($project->tested_date)?$project->tested_date:''}}</td>
                                                                <td class="">{{isset($project->api_implemented)?$project->api_implemented:''}}</td>
                                                                <td class="">
                                                                  {{isset($project->amount_confirm)?$project->amount_confirm:''}}
                                                              </td>


                                                              <td class=""> 
                                                                  @if(isset($project->invoice_epc))
                                                                  <a href="{{ asset('/uploads/project-doc/'.$project->invoice_epc)}}" target="_blank">Open file</a>
                                                                  @endif
                                                              </td>
                                                              <td class="">
                                                               @if(isset($project->sign_off))
                                                               <a href="{{ asset('/uploads/project-doc/'.$project->sign_off)}}" target="_blank">Open file</a>
                                                               @endif
                                                           </td>
                                                           <td class="">   
                                                            @if(isset($project->api_url))                       
                                                            <a href="{{isset($project->website_url)?$project->website_url:''}}" target="_blank">Visit API</a>
                                                            @endif
                                                        </td>
                                                        <td class="">   
                                                            @if(isset($project->webcam_url))                       
                                                            <a href="{{isset($project->webcam_url)?$project->webcam_url:''}}" target="_blank">Visit URL</a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($project->status == 'Pending')                       
                                                            <a href="#" target="_blank" class="btn btn-primary">{{$project->status}}</a>
                                                            @elseif($project->status == 'Reviewed') 
                                                            <a href="#" target="_blank" class="btn btn-warning">{{$project->status}}</a>
                                                            @elseif($project->status == 'Approve request') 
                                                            <a href="#"  class="btn btn-warning">Requested</a>
                                                            @elseif($project->status == 'Approved') 
                                                            <a href="#"  class="btn btn-success">Approved</a>
                                                            @elseif($project->status == 'Rejected') 
                                                            <a href="#"  class="btn btn-danger">Rejected</a>
                                                            @endif
                                                        </td>
                                                        <td class="">
                                                         <a href="{{route('employee.sale',$project->id)}}"> <span class="glyphicon glyphicon-edit text-success" ></span>
                                                            
                                                         </td>
                                                     </tr>
                                                     @endforeach

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
<div class="col-md-12 mb-40 box-bd">
    <div class="col-md-4">
        <h6 class="">
            “Steckbrief”/ Technical details
        </h6>
        <ul class="mt-4">
            <li>.....</li><br>
            <li>.....</li><br>
            <li>.....</li><br>
            <li>.....</li><br>
            <li>.....</li><br>

        </ul>
    </div>
    <div class="col-md-4">
        <h6 class="">
         CO2 Avoidance
         accumulated
     </h6>
     <div id="chart_div"></div>
 </div>
 <div class="col-md-4">
    <h6 class="">
     Picture Gallery
 </h6>
 <div>
    <img src="assets/img/pic.png" class="img-res" alt="">
</div>
</div>
</div>
<div class="col-md-12 mb-40 box-bd">
    <div class="col-md-4">
        <h6 class="">
         Web Cam
     </h6>
     <div>
        <img src="assets/img/web.jpg" class="img-res" alt="">
    </div>
</div>
<div class="col-md-4">
    <h6 class="">
        Power Generation (Gauge)
    </h6>
    <div id="gauge"></div>
</div>
<div class="col-md-4">
    <h6 class="">
        Power Generation (Tagesverlauf)
    </h6>
    <div id="chart_div4"></div>
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
</div>
@endsection