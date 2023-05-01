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
                                                    <h4>Benefit Input</h4>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Benefit name</label>
                                                        <input type="text" value="" class="form-control" name="" placeholder="Enter name" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Benefit detail</label>
                                                        <input type="text" value="" class="form-control" name=""  placeholder="Enter details"/>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label class="control-label left ">Score 1 start</label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label class="control-label left ">Score 2 start</label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label class="control-label left ">Score 3 start</label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label class="control-label left ">Score 4 start</label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label class="control-label left ">Score 5 start</label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>
                                                    
                                                </div>
                                                <button type="submit" value="" class="btn btn-primary" style="margin-left: 40%" >Submit</button>
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
                                                        <strong>Benefit View</strong>
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
                                                                                ID
                                                                            </th>
                                                                            <th style="width: 88px;">
                                                                                Benefit name
                                                                            </th>
                                                                            <th style="width: 88px;"> Benefit detail
                                                                            </th>

                                                                            <th style="width: 59px;"> Score 1
                                                                            </th>
                                                                            <th style="width: 59px;"> Score 2
                                                                            </th>
                                                                            <th style="width: 59px;"> Score 3
                                                                            </th>
                                                                            <th style="width: 59px;"> Score 4
                                                                            </th>
                                                                            <th style="width: 59px;"> Score 5
                                                                            </th>
                                                                            <th style="width: 59px;">
                                                                                Action
                                                                            </th>


                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                            <td class="ft-16"><b> 1</b>
                                                                            </td>
                                                                            <td class="ft-16">Zahid</td>
                                                                            <td class="ft-16">Explanation</td>
                                                                            <td class="ft-16">Yes</td>
                                                                            <td class="ft-16">Yes
                                                                            </td>
                                                                            <td class="ft-16">
                                                                                No</td>
                                                                            <td class="ft-16">No</td>
                                                                            <td class="ft-16">No</td>
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
                                                                        <th>ID</th>
                                                                        <th style="">
                                                                            Benefit name
                                                                        </th>
                                                                        <th style=""> Benefit detail
                                                                        </th>

                                                                        <th style=""> Score 1
                                                                        </th>
                                                                        <th style=""> Score 2
                                                                        </th>
                                                                        <th style=""> Score 3
                                                                        </th>
                                                                        <th style=""> Score 4
                                                                        </th>
                                                                        <th style=""> Score 5
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
                                                                        <td class="ft-16">Explanation</td>
                                                                        <td class="ft-16">Yes</td>
                                                                        <td class="ft-16">Yes
                                                                        </td>
                                                                        <td class="ft-16">
                                                                            No</td>
                                                                        <td class="ft-16">No</td>
                                                                        <td class="ft-16">No</td>
                                                                        <td class="ft-16"> <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 30px;color: black; margin-top: 20px;"></span></a>
                                                                           
                                                                        </td>

                                                                    </tr>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">Zafar</td>
                                                                        <td class="ft-16">Explanation</td>
                                                                        <td class="ft-16">Yes</td>
                                                                        <td class="ft-16">Yes
                                                                        </td>
                                                                        <td class="ft-16">
                                                                            No</td>
                                                                        <td class="ft-16">No</td>
                                                                        <td class="ft-16">No</td>
                                                                        <td class="ft-16"> <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 30px;color: black; margin-top: 20px;"></span></a>
                                                                           
                                                                        </td>

                                                                    </tr>
                                                                    <tr data-toggle="collapse" class="" data-target="#sample_5">

                                                                        <td class="ft-16"><b> 3</b>
                                                                        </td>
                                                                        <td class="ft-16">Zubair</td>
                                                                        <td class="ft-16">Explanation</td>
                                                                        <td class="ft-16">Yes</td>
                                                                        <td class="ft-16">Yes
                                                                        </td>
                                                                        <td class="ft-16">
                                                                            No</td>
                                                                        <td class="ft-16">No</td>
                                                                        <td class="ft-16">No</td>
                                                                        <td class="ft-16"> <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 30px;color: black; margin-top: 20px;"></span></a>
                                                                           
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
@endsection