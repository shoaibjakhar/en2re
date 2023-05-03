
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

                                            <div class="col-md-12  justify-space-between">
                                                <div class="col-md-12 box-bd">
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
                                                <form method="post" action="{{route('admin.add-ideation')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="portlet-body">
                                                        <h2>Ideation </h2>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Ideation Name</label>
                                                            <input type="text" value="{{old('name')}}" class="form-control" name="name" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Detail </label>
                                                            <input type="text" value="{{old('details')}}" class="form-control" name="details" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Type</label>
                                                            <input type="text" value="{{old('type')}}" class="form-control" name="type" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Attribute</label>
                                                            <input type="text" value="{{old('i_attributes')}}" class="form-control" name="i_attributes" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="GHG_reduction_classification">GHG Reduction Classification </label><br>
                                                            <select name="ghg_reduction_classification" id="" class="form-control">
                                                                @foreach($GHGReductionClassification as $GHGR)
                                                                <option value="{{$GHGR->id}}">{{$GHGR->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="End_use_energy_classification"> End Use Energy Classification</label><br>
                                                            <select name="end_use_energy_classification" id="" class="form-control">
                                                             @foreach($EUEnergyClassification as $EUE)
                                                             <option value="{{$EUE->id}}">{{$EUE->name}}</option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                     <div class="col-md-6">
                                                        <label class="control-label left ">Project Proposal <span class="info-doc">(Upload pdf file)</span></label>
                                                        <input name="project_proposal" class="form-control" type="file" accept="application/pdf" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Feasibility form/ excel tool <span class="info-doc">(Upload xls file)</span></label>
                                                        <input name="feasibility_form" class="form-control" type="file" accept="application/vnd.ms-excel" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Business Case <span class="info-doc">(Upload xls file)</span></label>
                                                        <input name="business_case" class="form-control" type="file" accept="application/vnd.ms-excel" />
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 text-right">
                                                        <button type="submit" value="" class="btn btn-primary  text-center" >Submit</button>
                                                    </div>


                                                </div>
                                            </form>

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
                                            <strong>Ideation List</strong>
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
                                                                Ideation Name
                                                            </th>
                                                            <th style="">Detail
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
                                                                Project Proposal
                                                            </th>
                                                            <th style="">
                                                                Feasibility Form/ Excel Tool
                                                            </th>
                                                            <th style="">
                                                                Business Case
                                                            </th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($ideations as $key=> $ideation)

                                                        <tr class="" role="row">

                                                            <td class="">{{($key+1)}}
                                                            </td>
                                                            <td class="">{{isset($ideation->name)?$ideation->name:'N/A'}}</td>
                                                            <td class="">{{isset($ideation->details)?$ideation->details:'N/A'}}</td>
                                                            <td class="">{{isset($ideation->type)?$ideation->type:'N/A'}}</td>
                                                            <td class="">{{isset($ideation->attribute)?$ideation->attribute:'N/A'}}</td>
                                                            <td class="">{{isset($ideation->GHGReduction->name)?$ideation->GHGReduction->name:'N/A'}}</td>
                                                            <td class="">{{isset($ideation->EUEnergy->name)?ucfirst($ideation->EUEnergy->name):'N/A'}}</td>
                                                            <td class="">{{isset($ideation->target_launch_date)?$ideation->target_launch_date:'N/A'}}</td>
                                                            <td class="">{{isset($ideation->epc_responsibility_classification)?ucfirst($ideation->epc_responsibility_classification):'N/A'}}</td>
                                                            <td class=""> 
                                                                @if(isset($ideation->project_proposal) && $ideation->project_proposal !='')
                                                                <?php //die('here');?>
                                                                <a href="{{ asset('/uploads/ideation-doc/'.$ideation->project_proposal)}}" target="_blank">Open file</a>
                                                                @else
                                                                N/A
                                                                @endif
                                                            </td>
                                                            <td class="">
                                                                 @if(isset($ideation->feasibility_form) && $ideation->feasibility_form !='')
                                                                 <a href="{{ asset('/uploads/ideation-doc/'.$ideation->feasibility_form)}}" target="_blank">Download file</a>
                                                                 @else
                                                                N/A
                                                                 @endif
                                                             </td>
                                                             <td class="">   
                                                                @if(isset($ideation->business_case)  && $ideation->business_case !='')
                                                                <a href="{{ asset('/uploads/ideation-doc/'.$ideation->business_case)}}" target="_blank">Download file</a>
                                                                @else
                                                                N/A
                                                                @endif
                                                            </td>
                                                            <td class="">
                                                            <!-- <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size: 20px;;color: black;"></i></a> -->
                                                            <a href="{{route('admin.ideation.delete',$ideation->id)}}"> <span class="glyphicon glyphicon-trash" ></span></a>
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
