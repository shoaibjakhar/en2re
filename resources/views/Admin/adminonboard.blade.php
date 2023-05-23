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

                                                <form method="post" action="{{route('admin.add-customer')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="portlet-body">
                                                        <h2>Onbording</h2>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Customer Name* </label>
                                                            <input type="text" value="{{old('name')}}" class="form-control" name="name" placeholder="e.g. Stabilus GmbH" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Email*</label>
                                                            <input type="email" value="{{old('email')}}" class="form-control" name="emails[]" placeholder="example@gmail.com" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Password*</label>
                                                            <input type="Password" value="" class="form-control" name="password" placeholder="" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Website URL </label>
                                                            <input type="text" value="{{old('website_url')}}" class="form-control" name="website_url" placeholder="Website URL" />
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Contract or letter-of-intend <span class="info-doc">(Upload pdf file)</span></label>
                                                            <input name="customer_contract" class="form-control" type="file" accept="application/pdf" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Customer Questionnaire  <span class="info-doc">(Upload xls file)</span></label>
                                                            <input name="customer_questionnaire" class="form-control" type="file" accept="application/vnd.ms-excel" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Partner Questionnaire  <span class="info-doc">(Upload xls file)</span></label>
                                                            <input name="partner_questionnaire" class="form-control" type="file" accept="application/vnd.ms-excel" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="Region">Region Classification </label>
                                                            <select name="region" id="" class="form-control" value="{{old('region')}}">
                                                                @foreach($regionClassification as $classification)
                                                                <option value="{{ $classification->id}}">{{ $classification->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Partner Classification</label><br>
                                                            <input type="radio" name="partner_classification" id="Yes" value="yes" />
                                                            <label for="Yes">Yes</label>
                                                            <input type="radio" checked name="partner_classification" id="No" value="no" />
                                                            <label for="No">No</label>
                                                        </div>
                                                        <!-- em credentials -->
                                                        <div class="col-md-12">
                                                            <h3>EM Credentials</h3>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Name* </label>
                                                            <input type="text" value="{{old('em_name')}}" class="form-control" name="em_name" placeholder="EM Name" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Email*</label>
                                                            <input type="email" value="{{old('em_email')}}" class="form-control" name="emails[]" placeholder="example@gmail.com" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Password* </label>
                                                            <input type="password" value="{{old('em_password')}}" class="form-control" name="em_password" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Phone</label>
                                                            <input type="tel" value="{{old('em_phone')}}" class="form-control" name="em_phone"  />
                                                        </div>

                                                        <!-- end em -->
                                                        <div class="col-md-12">
                                                            <h3>HR Credentials</h3>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Name* </label>
                                                            <input type="text" value="{{old('hr_name')}}" class="form-control" name="hr_name" placeholder="HR Name" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Email*</label>
                                                            <input type="email" value="{{old('hr_email')}}" class="form-control" name="emails[]" placeholder="example@gmail.com" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Password* </label>
                                                            <input type="password" value="{{old('hr_password')}}" class="form-control" name="hr_password" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label left ">Phone</label>
                                                            <input type="tel" value="{{old('hr_phone')}}" class="form-control" name="hr_phone" />
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
    </div>
</div>
</div>

{{--  -------Page Wrapper  --}}

<div class=" page-content-wrapper">
    <!-- start database table-->
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
                                                        <strong>Onbording List</strong>
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
                                                                        <tr class="secondary_bg font-white">
                                                                            <th>
                                                                                SR.NO
                                                                            </th>
                                                                            <th>
                                                                                Customer Name
                                                                            </th>
                                                                            <th > Email
                                                                            </th>
                                                                            <th >Website URL
                                                                            </th>
                                                                            <th style="">
                                                                                Region Classification
                                                                            </th>
                                                                            <th style="">
                                                                                Partner Classification
                                                                            </th>
                                                                            <th style="">Customer Contract</th>
                                                                            <th style="">Customer Questionnaire</th>
                                                                            <th style="">Partner Questionnaire</th>
                                                                           <!--  <th style="">
                                                                                Created By
                                                                            </th> -->
                                                                            <th style="">
                                                                                Action
                                                                            </th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        @foreach($customers as $key => $customer)
                                                                        <tr>

                                                                            <td class="">{{($key+1)}}
                                                                            </td>
                                                                            <td class="">{{isset($customer->name)?$customer->name:'N/A'}}
                                                                            </td>
                                                                            <td class="">{{isset($customer->email)?$customer->email:'N/A'}}</td>

                                                                                <td class="">
                                                                                    @if(isset($customer->customer->website_url) && $customer->customer->website_url !='')
                                                                                    
                                                                                    <a href="{{isset($customer->customer->website_url)?$customer->customer->website_url:''}}" target="_blank">Website URL</a>
                                                                                    @else 
                                                                                    N/A
                                                                                    @endif
                                                                                </td>

                                                                                <td class="">
                                                                                    {{isset($customer->customer->regionName->name)?$customer->customer->regionName->name:'N/A'}}
                                                                                </td>
                                                                                <td class=""> {{isset($customer->customer->partner_classification)?ucfirst($customer->customer->partner_classification):'N/A'}}
                                                                                </td>
                                                                                <td class=""> 
                                                                                    @if(isset($customer->customer->customer_contract) && $customer->customer->customer_contract !='')
                                                                                    <a href="{{ asset('/uploads/customer-doc/'.$customer->customer->customer_contract)}}" target="_blank">Open file</a>
                                                                                    @else
                                                                                    N/A
                                                                                    @endif
                                                                                </td>
                                                                                <td class=""> 
                                                                                    @if(isset($customer->customer->customer_questionnaire) && $customer->customer->customer_questionnaire !='')
                                                                                    <a href="{{ asset('/uploads/customer-doc/'.$customer->customer->customer_questionnaire)}}" target="_blank">Download file</a>
                                                                                    @else
                                                                                    N/A
                                                                                    @endif
                                                                                </td>
                                                                                <td class=""> 
                                                                                    @if(isset($customer->customer->partner_questionnaire) && $customer->customer->partner_questionnaire !='')
                                                                                    <a href="{{ asset('/uploads/customer-doc/'.$customer->customer->partner_questionnaire)}}" target="_blank">Download file</a>
                                                                                    @else
                                                                                    N/A
                                                                                    @endif
                                                                                </td>
                                                                               <!--  <td class=""> {{isset($customer->createdBy->name)?ucfirst($customer->createdBy->name):''}}
                                                                               </td> -->
                                                                               <td class="">
                                                                                <!--   <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size: 20px;;color: black;"></i></a> -->
                                                                                <a href="{{ route('admin.customer.delete',$customer->id)}}"> <span class="glyphicon glyphicon-trash" ></span></a>
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




