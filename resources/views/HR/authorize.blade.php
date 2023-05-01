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

                                            <div class="col-md-12 mb-40 box-bd">
                                                <div class="portlet-body">
                                                    <h2>Authorization Input</h2>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Employee list</label>
                                                        <input type="file" id="fileSelect" class="form-control" accept=".xlsx, .xls, .csv" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Employee Name</label>
                                                        <input type="text" value="" class="form-control" name="" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Employee Address </label>
                                                        <input type="text" value="" class="form-control" name="" placeholder="mail address, Website URL" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Employee Email </label>
                                                        <input type="text" value="" class="form-control" name="" placeholder="Enter email" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Employee Bank Account  </label>
                                                        <input type="text" value="" class="form-control" name="" placeholder="SWIFT, IBAN" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Employee User Class  </label>
                                                        <select name="Employee" id="Employee" class="form-control">
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                          </select>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label class="control-label left ">HR Authorization </label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label class="control-label left ">EM Authorization </label><br>
                                                        <input type="radio" name="selection" id="Yes" />
                                                        <label for="Yes">Yes</label>
                                                        <input type="radio" name="selection" id="No" />
                                                        <label for="No">No</label>
                                                    </div>
      <button type="submit" value="" class="btn btn-primary" style="margin-left: 45%">Submit</button>
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
                                            <div class="col-md-12 mb-40 box-bd">

                                                <div class="col-md-8">
                                                    <h4 class="">
                                                        <strong>Athorization View</strong>
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

                                                                            <th style="">
                                                                                Employee list
                                                                            </th>
                                                                            <th style=""> Employee Name
                                                                            </th>

                                                                            <th style=""> Employee Addres
                                                                            </th>
                                                                            <th style=""> Employee Email
                                                                            </th>
                                                                            <th style=""> Employee Bank Account
                                                                            </th>
                                                                            <th>Employee User Class</th>
                                                                            <th style=""> HR Authorization
                                                                            </th>
                                                                            <th style=""> EM Authorization
                                                                            </th>
                                                                            <th style="">
                                                                                Action
                                                                            </th>


                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr class="gradeX odd" role="row">

                                                                            <td class="ft-16"><b> 1</b>
                                                                            </td>
                                                                            <td class="ft-16">Zahid</td>
                                                                            <td class="ft-16">Softwebies</td>
                                                                            <td class="ft-16">zahid@gmail.com</td>
                                                                            <td class="ft-16">SWIFT</td>
    
                                                                            <td class="ft-16">
                                                                                A</td>
                                                                            <td class="ft-16">Yes</td>
                                                                            <td class="ft-16">No</td>
                                                                            <td class="ft-16">
                                                                                <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 30px;color: black; margin-top: 20px;"></span></a>
                                                                            </td>
    
    
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <table class="collapse in table table-hover  order-column dataTable" id="sample_5" role="grid" aria-describedby="sample_5_info">

                                                                <thead>
                                                                    <tr role="row " class="secondary_bg font-white">

                                                                        <th style="">
                                                                            Employee list
                                                                        </th>
                                                                        <th style=""> Employee Name
                                                                        </th>

                                                                        <th style=""> Employee Addres
                                                                        </th>
                                                                        <th style=""> Employee Email
                                                                        </th>
                                                                        <th style=""> Employee Bank Account
                                                                        </th>
                                                                        <th>Employee User Class</th>

                                                                        <th style=""> HR Authorization
                                                                        </th>
                                                                        <th style=""> EM Authorization
                                                                        </th>
                                                                        <th class=" " tabindex="0" aria-controls="sample_4" rowspan="1" colspan="1" aria-label=" action : activate to sort column ascending" style="width: 59px;"> Actions
                                                                        </th>


                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="gradeX odd" role="row">

                                                                        <td class="ft-16"><b> 1</b>
                                                                        </td>
                                                                        <td class="ft-16">Zahid</td>
                                                                        <td class="ft-16">Softwebies</td>
                                                                        <td class="ft-16">zahid@gmail.com</td>
                                                                        <td class="ft-16">SWIFT</td>

                                                                        <td class="ft-16">
                                                                            A</td>
                                                                        <td class="ft-16">Yes</td>
                                                                        <td class="ft-16">No</td>
                                                                        <td class="ft-16">
                                                                            <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 30px;color: black; margin-top: 20px;"></span></a>
                                                                        </td>


                                                                    </tr>
                                                                    <tr class="gradeX odd" role="row">

                                                                        <td class="ft-16"><b> 2</b>
                                                                        </td>
                                                                        <td class="ft-16">Zahid</td>
                                                                        <td class="ft-16">Softwebies</td>
                                                                        <td class="ft-16">zahid@gmail.com</td>
                                                                        <td class="ft-16">SWIFT</td>

                                                                        <td class="ft-16">
                                                                            A</td>
                                                                        <td class="ft-16">Yes</td>
                                                                        <td class="ft-16">No</td>
                                                                        <td class="ft-16">
                                                                            <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 30px;color: black; margin-top: 20px;"></span></a>
                                                                        </td>


                                                                    </tr>
                                                                    <tr class="gradeX odd" role="row">

                                                                        <td class="ft-16"><b> 3</b>
                                                                        </td>
                                                                        <td class="ft-16">Zahid</td>
                                                                        <td class="ft-16">Softwebies</td>
                                                                        <td class="ft-16">zahid@gmail.com</td>
                                                                        <td class="ft-16">SWIFT</td>

                                                                        <td class="ft-16">
                                                                            A</td>
                                                                        <td class="ft-16">Yes</td>
                                                                        <td class="ft-16">No</td>
                                                                        <td class="ft-16">
                                                                            <a href=""> <span class="glyphicon glyphicon-trash" style="font-size: 30px;color: black; margin-top: 20px;"></span></a>
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

@endsection