@extends('EM.EMlayouts')
@section('content')

<!-- start input forms -->
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
                                            <div class="col-md-12  justify-space-between">
                                                @if ($errors->any() || session('success') || isset($ideation_edit->id))
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
                                               @if(isset($ideation_edit->id))
                                               <div>
                                                   <h4 class="">
                                                   Edit Project Dev Launcher
                                                </h4>
                                                <form method="post" action="{{route('em.update-ideation')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{isset($ideation_edit->id)?$ideation_edit->id:''}}">
                                                    <div class="portlet-body">
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Target Launch Date*</label>
                                                            <input type="date" value="{{isset($ideation_edit->target_launch_date)?$ideation_edit->target_launch_date:date('Y-m-d')}}" class="form-control" name="target_launch_date" required/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            @if(isset($ideation_edit->epc_responsibility_classification))
                                                            <label class="control-label left">EPC Responsibility Classification*</label><br>
                                                            <input type="radio" <?php if($ideation_edit->epc_responsibility_classification =="Yes") echo 'checked' ?>  name="epc_responsibility_classification" value="Yes" />
                                                            <label for="Yes" class="mt-4">Yes</label>
                                                            <input type="radio" <?php if($ideation_edit->epc_responsibility_classification =="No") echo 'checked' ?>  name="epc_responsibility_classification" value="No" /><label for="No">No</label>
                                                            @else
                                                            <label class="control-label left">EPC responsibility classification*</label><br>
                                                            <input type="radio"  name="epc_responsibility_classification" value="Yes" />
                                                            <label for="Yes" class="mt-4">Yes</label>
                                                            <input type="radio" name="epc_responsibility_classification" value="No" /><label for="No">No</label>
                                                            @endif
                                                        </div>

                                                    </div>
                                                    <button class="btn btn-primary mt-4" style="margin-left: px;">Update</button>
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
                                            <strong>Project Dev Launcher List</strong>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-40 box-bd">
                                    <div class="portlet-body filter-none">
                                        <div id="sample_5_wrapper" class="dataTables_wrapper">
                                            <div class="table Add">
                                                <div class="table-scrollable">
                                                     <table class="table table-hover  dataTable" id="sample_5" role="grid" >

                                                        <thead>
                                                            <tr role="row " class="secondary_bg font-white">

                                                                <th style="">
                                                                    SR.NO
                                                                </th>
                                                                <th style="">
                                                                    Ideation Name
                                                                </th>
                                                                <th style=""> Detail
                                                                </th>

                                                                <th style="">Type
                                                                </th>
                                                                <th style="">
                                                                    Attribute
                                                                </th>
                                                                <th style="">
                                                                    GHG Reduction Classification
                                                                </th>
                                                                <th style="">
                                                                    End Use Energy Classification
                                                                </th>
                                                                <th style="">
                                                                    Target Launch Date
                                                                </th>
                                                                <th style="">
                                                                    EPC Responsibility Classification
                                                                </th>
                                                                <th style="">
                                                                    Project proposal
                                                                </th>
                                                                <th style="">
                                                                    Feasibility form/ excel tool
                                                                </th>
                                                                <th style="">
                                                                    Business case
                                                                </th>
                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach($ideations as $key=> $ideation)

                                                            <tr>

                                                                <td class="">
                                                                    {{($key+1)}}
                                                                </td>
                                                                <td class="">{{isset($ideation->name)?$ideation->name:''}}</td>
                                                                <td class="">{{isset($ideation->details)?$ideation->details:''}}</td>
                                                                <td class="">{{isset($ideation->type)?$ideation->type:''}}</td>
                                                                <td class="">{{isset($ideation->attribute)?$ideation->attribute:''}}</td>
                                                                <td class="">{{isset($ideation->GHGReduction->name)?$ideation->GHGReduction->name:''}}</td>
                                                            <td class="">{{isset($ideation->EUEnergy->name)?ucfirst($ideation->EUEnergy->name):''}}</td>
                                                                <td class="">{{isset($ideation->target_launch_date)?$ideation->target_launch_date:''}}</td>
                                                                <td class="">{{isset($ideation->epc_responsibility_classification)?ucfirst($ideation->epc_responsibility_classification):''}}</td>
                                                                <td class=""> 
                                                                    @if(isset($ideation->project_proposal))
                                                                    <a href="{{ asset('/uploads/ideation-doc/'.$ideation->project_proposal)}}" target="_blank">Open file</a>
                                                                    @endif
                                                                </td>
                                                                <td class="">
                                                                   @if(isset($ideation->feasibility_form))
                                                                   <a href="{{ asset('/uploads/ideation-doc/'.$ideation->feasibility_form)}}" target="_blank">Download file</a>
                                                                   @endif
                                                               </td>
                                                               <td class="">   
                                                                @if(isset($ideation->business_case))
                                                                <a href="{{ asset('/uploads/ideation-doc/'.$ideation->business_case)}}" target="_blank">Download file</a>
                                                                @endif
                                                            </td>
                                                            <td class="">
                                                                <a href="{{route('em.ideation.edit',$ideation->id)}}"><span class="glyphicon glyphicon-edit text-success" ></span></a>
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
<!-- end input forms-->

@endsection