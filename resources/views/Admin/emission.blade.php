
@extends('Admin.adminlayouts')
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

                     <div class="wrapper center-block">
                      <div class="left">
                        <div class="col-md-12  justify-space-between">
                          @if ($errors->any() || session('success') || isset($project_edit->id))
                          <div class="col-md-12 mb-40 box-bd">
                            @if ($errors->any())
                            <div class="alert-danger pl-40">
                             <ol>
                               @foreach ($errors->all() as $error)
                               <li style="list-style-type:square !important">{{$error}}</li>
                               @endforeach
                             </ol>
                           </div>
                           @endif
                           @if (session('success'))
                           <div class="alert-success pl-40">
                             {{ session('success') }}
                           </div>
                           @endif
                           @if(isset($project_edit->id))
                           <div>
                             <h4 class="">
                              <strong>Edit Emission</strong>
                            </h4>
                            <form method="post" action="{{route('admin.update-project')}}" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id" value="{{isset($project_edit->id)?$project_edit->id:''}}">
                              <div class="portlet-body">
                               <div class="col-md-6">
                                <label class="control-label left ">Tested By*</label>
                                <input type="text" value="{{isset($project_edit->tested_by)?$project_edit->tested_by:''}}" class="form-control" name="tested_by" required/>
                              </div>
                              <div class="col-md-6">
                                <label class="control-label left ">Emission Tested Date*</label>
                                <input type="date" value="{{isset($project_edit->tested_date)?$project_edit->tested_date:date('Y-m-d')}}" class="form-control" name="tested_date" required/>
                              </div>
                              <div class="col-md-6">
                                <label for="End_use_energy_classification">Status*</label><br>
                                <select name="status" id="" class="form-control" required>
                                  <option value="1" selected>Pending</option>
                                  <option value="2" <?php if($project_edit->status=='Reviewed') echo 'selected' ?>>Reviewed</option>
                                  <option value="3" <?php if($project_edit->status=='Approve request') echo 'selected' ?>>Approve request</option>
                                  <option value="4"  <?php if($project_edit->status=='Approved') echo 'selected' ?>>Approved</option>
                                  <option value="5"  <?php if($project_edit->status=='Rejected') echo 'selected' ?>>Rejected</option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label for="End_use_energy_classification">Remarks</label><br>
                                <input type="text" value="{{isset($project_edit->remarks)?$project_edit->remarks:''}}" class="form-control" name="remarks">
                              </div>

                              <div class="col-md-6">
                                @if(isset($project_edit->api_implemented))
                                <label class="control-label left">API Implemented*</label><br>
                                <input type="radio" <?php if($project_edit->api_implemented =="Yes") echo 'checked' ?>  name="api_implemented" value="Yes" />
                                <label for="Yes" class="mt-4">Yes</label>
                                <input type="radio" <?php if($project_edit->api_implemented =="No") echo 'checked' ?>  name="api_implemented" value="No" /><label for="No">No</label>
                                @else
                                <label class="control-label left">API Implemented*</label><br>
                                <input type="radio"  name="api_implemented" value="Yes" />
                                <label for="Yes" class="mt-4">Yes</label>
                                <input type="radio" name="api_implemented" value="No" /><label for="No">No</label>
                                @endif
                              </div>
                              <div class="col-md-6">
                                @if(isset($project_edit->amount_confirm))
                                <label class="control-label left">Emission Amount Confirmed*</label><br>
                                <input type="radio" <?php if($project_edit->amount_confirm =="Yes") echo 'checked' ?>  name="amount_confirm" value="Yes" />
                                <label for="Yes" class="mt-4">Yes</label>
                                <input type="radio" <?php if($project_edit->amount_confirm =="No") echo 'checked' ?>  name="amount_confirm" value="No" /><label for="No">No</label>
                                @else
                                <label class="control-label left">Emission Amount Confirmed*</label><br>
                                <input type="radio"  name="amount_confirm" value="Yes" />
                                <label for="Yes" class="mt-4">Yes</label>
                                <input type="radio" name="amount_confirm" value="No" /><label for="No">No</label>
                                @endif
                              </div>
                              <div class="col-md-12 text-right">
                               <button type="submit" class="btn btn-primary mt-4" style="margin-left: px;">Update</button>
                             </div>

                           </div>

                         </form>
                       </div>
                       @endif
                     </div>
                     @endif

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
                      <strong>Emission List</strong>
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
                              <th>Customer Name</th>
                              <th style="">
                                Project Name
                              </th>
                              <th>Ideation</th>
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
                             <td class="">{{isset($project->customer->name)?$project->customer->name:'N/A'}}</td>
                            <td class="">{{isset($project->name)?$project->name:'N/A'}}</td>
                            <td class="">{{isset($project->Ideation->name)?$project->Ideation->name:'N/A'}}</td>
                            <td class="">{{isset($project->detail)? substr($project->detail,0,20).'...':'N/A'}}</td>
                            <td class="">{{isset($project->type)?$project->type:'N/A'}}</td>
                            <td class="">{{isset($project->attribute)?$project->attribute:'N/A'}}</td>
                            <td class="">${{isset($project->investment_amount)?$project->investment_amount:'N/A'}}</td>
                            <td class="">{{isset($project->ghg_reduction_classification)?$project->ghg_reduction_classification:'N/A'}}</td>
                            <td class="">{{isset($project->end_use_energy_classification)?ucfirst($project->end_use_energy_classification):'N/A'}}</td>

                            <td class="">{{isset($project->tested_by)?$project->tested_by:'N/A'}}</td>
                            <td class="">{{isset($project->tested_date)?$project->tested_date:'N/A'}}</td>
                            <td class="">{{isset($project->api_implemented)?$project->api_implemented:'N/A'}}</td>
                            <td class="">
                              {{isset($project->amount_confirm)?$project->amount_confirm:'N/A'}}
                            </td>


                            <td class=""> 
                              @if(isset($project->invoice_epc) && $project->invoice_epc !='')
                              <a href="{{ asset('/uploads/project-doc/'.$project->invoice_epc)}}" target="_blank">Open file</a>
                              @else
                              N/A
                              @endif
                            </td>
                            <td class="">
                             @if(isset($project->sign_off) && $project->sign_off !='')
                             <a href="{{ asset('/uploads/project-doc/'.$project->sign_off)}}" target="_blank">Open file</a>
                             @else
                              N/A
                             @endif
                           </td>
                           <td class="">   
                            @if(isset($project->api_url) && $project->api_url !='')                       
                            <a href="{{isset($project->api_url)?$project->api_url:''}}" target="_blank">API URL</a>
                            @else
                              N/A
                            @endif
                          </td>
                          <td class="">   
                            @if(isset($project->webcam_url) && $project->webcam_url !='')                       
                            <a href="{{isset($project->webcam_url)?$project->webcam_url:''}}" target="_blank">Webcam URL</a>
                            @else
                              N/A
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
                           <a href="{{route('admin.project.edit',$project->id)}}"> <span class="glyphicon glyphicon-edit text-success" ></span>
                            <!-- <a href="{{route('admin.project.delete',$project->id)}}"> <span class="glyphicon glyphicon-trash" ></span></a> -->
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
</div>
</div>
</div>
</div>


@endsection
