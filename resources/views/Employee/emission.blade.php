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
                          @if ($errors->any() || session('success') ||session('error') || isset($project_edit->id))
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
                           @if (session('error'))
                           <div class="alert-danger pl-40">
                             {{ session('error') }}
                           </div>
                           @endif
                           @if(isset($project_edit->id))
                           <div>
                             <h4 class="">
                              <strong>Add Investment</strong>
                            </h4>
                            <form method="post" action="{{route('employee.add-investment')}}" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id" value="{{isset($project_edit->id)?$project_edit->id:''}}">
                              <div class="portlet-body">
                               <div class="col-md-6">
                                <label class="control-label left ">Investment Amount</label>
                                <input type="text" value="${{isset($project_edit->investment_amount)?$project_edit->investment_amount:''}}" class="form-control" name="investment_amount" readonly />
                              </div> 
                              <div class="col-md-6">
                                <?php 
                                  $remaning_amount = $project_edit->investment_amount-$totat_investment_amount;
                                ?>
                                <label class="control-label left ">Add Your Investment Amount($)* </label>
                                <input name="employee_investment_amount" class="form-control" type="number" min='0.5' max='{{$remaning_amount}}' step="0.1"  required placeholder="0.00" />
                                
                                  @if($remaning_amount> 0.5)
                                  <span class="text-success"> You can investment maximum ${{$remaning_amount}}</span>
                                   @else
                                 <span class="text-danger">  Investment of this project were closed, you can invest an other!</span>
                                   @endif
                                
                              </div>                       
                              <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary mt-4" style="margin-left: px;">Add Investment</button>
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

                                <th style="">Participation Right File</th>
                               <th>Action</th>
                             </tr>
                           </thead>

                           <tbody>
                            @foreach($projects as $key=> $project)

                            <tr class="gradeX odd" role="row">

                              <td class="">{{($key+1)}}
                              </td>
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
                            @php
                            $participation_right_file = App\Models\Customer::where('id',auth()->user()->customer_id)->first();
                            @endphp
                              @if(isset($participation_right_file['participation_right_file']) && $participation_right_file['participation_right_file'] !='')
                                <a href="{{ asset('/uploads/customer-doc/'.$participation_right_file['participation_right_file'])}}" target="_blank">Open file</a>
                                @else
                                N/A
                                @endif
                          </td>
                            <td class="">
                             <a class="btn btn-success" href="{{route('employee.investment',$project->id)}}">Invest Now
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