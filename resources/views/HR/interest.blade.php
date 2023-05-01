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
                                                    <h4>Interest Input</h4>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">	Participation Right Interest Rate </label>
                                                        <select name="Participation" id="Participation" class="form-control">
                                                            <option value="content as ">content as </option>
                                                            <option value="HR ">HR </option>
                                                            <option value="Partizipation">Partizipation</option>
                                                            <option value="rigths">rigths</option>
                                                          </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Target Revision date</label>
                                                        <input type="date" value="" class="form-control" name="" />
                                                    </div>
                                                    <button type="submit" value="" class="btn btn-primary col-md-2 mt-4" style="margin-left: 40%">Submit</button>
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
                                                        <strong>Interest View</strong>
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

                                                                            <th style="width: 88px;">
                                                                                #Amount
                                                                            </th>
                                                                            <th style="width: 88px;"> Participation Right Interest Rate
                                                                            </th>
                                                                            <th style="width: 59px;"> Target Revision date
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
                                                                            <td class="ft-16">content as</td>

                                                                            <td class="ft-16">11-25-2022</td>
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
                                                                        <th style="width: 88px;">
                                                                            #Amount
                                                                        </th>
                                                                        <th style="width: 88px;"> Participation right interest
                                                                        </th>
                                                                        <th style="width: 59px;"> Target Revision date
                                                                        </th>
                                                                        <th class=" " tabindex="0" aria-controls="sample_4" rowspan="1" colspan="1" aria-label=" action : activate to sort column ascending" style="width: 59px;"> Actions
                                                                        </th>


                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 3</b>
                                                                        </td>
                                                                        <td class="ft-16">Partizipation </td>

                                                                        <td class="ft-16">11-25-2022</td>
                                                                        <td class="ft-16">
                                                                            <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                        </td>

                                                                    </tr>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 2</b>
                                                                        </td>
                                                                        <td class="ft-16">HR</td>

                                                                        <td class="ft-16">11-25-2022</td>
                                                                        <td class="ft-16">
                                                                            <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                        </td>

                                                                    </tr>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">contact as</td>

                                                                        <td class="ft-16">11-25-2022</td>
                                                                        <td class="ft-16">
                                                                            <i class="bi bi-caret-up-fill" aria-hidden="true"></i>
                                                                        </td>

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