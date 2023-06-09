
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
                                                <form method="post" action="{{route('admin.add-project')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="portlet-body">
                                                        <h2>Project </h2>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Project Name*</label>
                                                            <input type="text" value="{{old('name')}}" class="form-control" name="name" required />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Detail* </label>
                                                            <input type="text" value="{{old('details')}}" class="form-control" name="details" required />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Type*</label>
                                                            <select name="type" id="" class="form-control" required>
                                                                @foreach($types as $type)
                                                                <option value="{{$type->type}}">{{ucfirst($type->type)}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Attribute*</label>
                                                            <select name="i_attributes" id="" class="form-control" required>
                                                                @foreach($attributes as $attribute)
                                                                <option value="{{$attribute->attribute}}">{{ucfirst($attribute->attribute)}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="GHG_reduction_classification">GHG Reduction Classification* </label><br>
                                                            <select name="ghg_reduction_classification" id="" class="form-control" required>
                                                                <option value="scope 1">Scope 1</option>
                                                                <option value="scope 2">Scope 2</option>
                                                                <option value="scope 3">Scope 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="End_use_energy_classification"> End Use Energy Classification*</label><br>
                                                            <select name="end_use_energy_classification" id="" class="form-control" required>
                                                                <option value="electricity">Electricity</option>
                                                                <option value="heating">Heating</option>
                                                                <option value="cooling">Cooling</option>
                                                                <option value="steam">Steam</option>
                                                                <option value="mobility">Mobility</option>
                                                                <option value="hydrogen">Hydrogen</option>
                                                                <option value="others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Launch Date* </label>
                                                            <input name="launch_date" class="form-control" type="date" value="<?php echo Date('Y-m-d')?>" required/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <label class="control-label left ">Investment Amount* </label>
                                                                    <input name="investment_amount" class="form-control" type="number" value="" required placeholder="0.00" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label left ">Currency*</label>
                                                                    <select name="currency_id" id="" class="form-control" required>
                                                                        @foreach($currencies as $currency)
                                                                        <option value="{{$currency->id}}">{{ucfirst($currency->symbol)}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Project Picture*</label>
                                                            <input type="file" name="images[]"  class="form-control"  accept="image/png, image/jpeg, image/jpeg" multiple required/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">API URL* </label>
                                                            <input type="text" value="{{old('api_url')}}" class="form-control" name="api_url" required/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Invoice EPC* </label>
                                                            <input name="invoice_epc" class="form-control" type="file" accept="application/pdf" required/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Sign-Off* </label>
                                                            <input name="sign_off" class="form-control" type="file" accept="application/pdf" required/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Webcam URL </label>
                                                            <input type="text" value="{{old('webcam_url')}}" class="form-control" name="webcam_url" />
                                                        </div>
                                                          <div class="col-md-6">
                                                            <label class="control-label left ">Location</label>
                                                            <input type="text" value="" class="form-control"/>
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
                                                <strong>Project List</strong>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-40 box-bd">
                                        <div class="portlet-body filter-none">
                                            <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                <div class="table Add">
                                                    <table class="collapse in table table-hover  order-column dataTable" id="sample_5" role="grid" aria-describedby="sample_5_info">

                                                        <thead>
                                                            <tr role="row " class="secondary_bg font-white">

                                                                <th style="">
                                                                    Id
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

                                                                
                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach($projects as $key=> $project)

                                                            <tr class="gradeX odd" role="row">

                                                                <td class="ft-16"><b>{{$project->id}}</b>
                                                                </td>
                                                                <td class="ft-16">{{isset($project->name)?$project->name:''}}</td>
                                                                <td class="ft-16">{{isset($project->detail)?$project->detail:''}}</td>
                                                                <td class="ft-16">{{isset($project->type)?$project->type:''}}</td>
                                                                <td class="ft-16">{{isset($project->attribute)?$project->attribute:''}}</td>
                                                                <td class="ft-16">{{isset($project->currency->symbol)?$project->currency->symbol:''}}{{isset($project->investment_amount)?$project->investment_amount:''}}</td>
                                                                <td class="ft-16">{{isset($project->ghg_reduction_classification)?$project->ghg_reduction_classification:''}}</td>
                                                                <td class="ft-16">{{isset($project->end_use_energy_classification)?ucfirst($project->end_use_energy_classification):''}}</td>
                                                                <td class="ft-16"> 
                                                                    @if(isset($project->invoice_epc))
                                                                    <a href="{{ asset('/uploads/project-doc/'.$project->invoice_epc)}}" target="_blank">Open file</a>
                                                                    @endif
                                                                </td>
                                                                <td class="ft-16">
                                                                 @if(isset($project->sign_off))
                                                                 <a href="{{ asset('/uploads/project-doc/'.$project->sign_off)}}" target="_blank">Open file</a>
                                                                 @endif
                                                             </td>
                                                             <td class="ft-16">   
                                                                @if(isset($project->api_url))                       
                                                                <a href="{{isset($project->website_url)?$project->website_url:''}}" target="_blank">Visit API</a>
                                                                @endif
                                                            </td>
                                                            <td class="ft-16">   
                                                                @if(isset($project->webcam_url))                       
                                                                <a href="{{isset($project->webcam_url)?$project->webcam_url:''}}" target="_blank">Visit URL</a>
                                                                @endif
                                                            </td>
                                                            <td class="ft-16">
                                                                <!-- <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size: 20px;;color: black;"></i></a> -->
                                                                <a href="{{route('admin.project.delete',$project->id)}}"> <span class="glyphicon glyphicon-trash" ></span></a>
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


@endsection
