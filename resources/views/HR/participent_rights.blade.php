@extends('HR.hrlayouts')
@section('content')

<!-- start body -->
<div class=" page-content-wrapper">
    <!-- start input forms -->
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

                                            <!-- start input form 1 -->

                                            <div class="col-md-12 mb-40 box-bd">
                                                <div class="portlet-body">
                                                    <h4>Participation Input</h4>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Participation Right Name</label>
                                                        <input type="text" value="" class="form-control" name="" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Participation Right Interest Rate</label>
                                                        <input type="number" value="" class="form-control" name="" />
                                                    </div>
                                                    {{--  <div class="col-md-6">
                                                        <label class="control-label left ">Purchase Participation (Purchase Amount) </label>
                                                        <input type="text" value="" class="form-control" name="" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Sell Participation (Sell Amount) </label>
                                                        <input type="number" value="" class="form-control" name="" />
                                                    </div>  --}}
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Participation Right File</label>
                                                        <input type="file" id="fileSelect" class="form-control" accept=".xlsx, .xls, .csv" />
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label class="control-label left mt-2 ">Participation Right Activity Status </label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>
                                                </div>
                                                <button type="submit" value="" class="btn btn-primary mt-4" style="margin-left: 0%" >Submit</button>
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
                                                        <strong>Participation View</strong>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-40 box-bd">
                                                <div class="portlet-body filter-none">
                                                    <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                        <div class="table Add">
                                                            <div class="table-scrollable">
                                                                <table class="table table-hover  order-column dataTable" role="grid" aria-describedby="sample_5_info">
                                                                    <thead>
                                                                        <tr class="secondary_bg font-white">
                                                                            <th  style="width: 88px;">ID</th>
                                                                            <th style="width: 88px;">
                                                                                Participation Right Name
                                                                            </th>
                                                                            <th style="width: 88px;"> Participation Right Interest Rate
                                                                            </th>

                                                                            <th style="width: 59px;"> Participation Right File
                                                                            </th>
                                                                            <th style="width: 59px;"> Participation Right Activity Status
                                                                            </th>

                                                                            <th style="width: 59px;">
                                                                                Action
                                                                            </th>


                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                            <td class="ft-16"><b> 3</b>
                                                                            </td>
                                                                            <td class="ft-16">Zubair</td>

                                                                            <td class="ft-16">
                                                                                35%</td>
                                                                            <td class="ft-16"> <img src="{{ asset('./assets/img/web.jpg') }}" class="highlight4" height="24" width="24" alt=""></td>
                                                                           <td>Yes</td>
                                                                            <td class="ft-16">
                                                                                <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                            </td>

                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <table class="collapse in table table-hover  order-column dataTable" id="sample_5" role="grid" aria-describedby="sample_5_info">

                                                                <thead>
                                                                    <tr role="row " class="secondary_bg font-white">
                                                                        <th  style="width: 88px;">ID</th>
                                                                        <th style="width: 88px;">
                                                                            Participation Right Name
                                                                        </th>
                                                                        <th style="width: 88px;"> Participation Right Interest Rate
                                                                        </th>

                                                                        <th style="width: 59px;"> Participation Right File
                                                                        </th>
                                                                        <th style="width: 59px;"> Participation Right Activity Status
                                                                        </th>
                                                                        <th class=" " tabindex="0" aria-controls="sample_4" rowspan="1" colspan="1" aria-label=" action : activate to sort column ascending" style="width: 59px;"> Actions
                                                                        </th>


                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 2</b>
                                                                        </td>
                                                                        <td class="ft-16">Zahid</td>

                                                                        <td class="ft-16">
                                                                            35%</td>
                                                                        <td class="ft-16"> <img src="{{ asset('./assets/img/web.jpg') }}" class="highlight4" height="24" width="24" alt=""></td>
                                                                       <td>Yes</td>
                                                                        <td class="ft-16">
                                                                            <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                        </td>

                                                                    </tr>

                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">Zafar</td>

                                                                        <td class="ft-16">
                                                                            325%</td>
                                                                        <td class="ft-16"> <img src="{{ asset('./assets/img/web.jpg') }}" class="highlight4" height="24" width="24" alt=""></td>
                                                                       <td>Yes</td>
                                                                        <td class="ft-16">
                                                                            <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                        </td>

                                                                    </tr>

                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 3</b>
                                                                        </td>
                                                                        <td class="ft-16">Zubair</td>

                                                                        <td class="ft-16">
                                                                            55%</td>
                                                                        <td class="ft-16"> <img src="{{ asset('./assets/img/web.jpg') }}" class="highlight4" height="24" width="24" alt=""></td>
                                                                       <td>Yes</td>
                                                                        <td class="ft-16">
                                                                            <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                        </td>

                                                                    </tr>


                                                                    </tr>


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


<!-- end database table -->
<!-- end body -->

@endsection