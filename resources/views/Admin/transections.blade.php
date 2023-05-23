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
                                            <div class="col-md-12 mb-40 box-bd">
                                              @if (session('success'))
                                              <div class="alert-success pl-40">
                                               {{ session('success') }}
                                           </div>
                                           @endif
                                           <div class="col-md-8">
                                            <h4 class="">
                                              <strong> Transactions</strong> 
                                          </h4>
                                      </div>
                                  </div>

                                  <div class="col-md-12 mb-40 box-bd">
                                    <div class="portlet-body filter-none">
                                        <div id="sample_5_wrapper" class="dataTables_wrapper">
                                            <div class="table Add">
                                                <div class="table-scrollable">
                                                    <table class="table table-hover  order-column dataTable" role="grid"
                                                    aria-describedby="sample_5_info">
                                                    <thead>
                                                        <tr class="secondary_bg font-white">

                                                            <th style="width: 88px;">
                                                                Total Transactions
                                                            </th>
                                                            <th style="width: 88px;">Total Investment
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr >
                                                            <td > {{isset($number_of_transection)?$number_of_transection:0;}} </td>
                                                            <td >${{isset($totat_investment_amount)?$totat_investment_amount:0;}}</td> 
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <table  class="collapse in table table-hover  order-column dataTable"
                                            id="sample_5" role="grid"
                                            aria-describedby="sample_5_info">

                                            <thead>
                                                <tr role="row" class="secondary_bg font-white">
                                                    <th>SR.NO </th>
                                                    <th>Project Name</th>
                                                    <th>Ideation</th>
                                                     <th>Customer Name</th>
                                                    <th>Employee Name</th>
                                                    <th>Employee Investment  </th>
                                                    <th>Payment Id</th>
                                                    <th>Date of Investment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($employee_investment as $key => $investment)
                                                <tr class="gradeX odd" role="row">
                                                    <td>{{($key+1)}}</td>
                                                    <td> {{isset($investment->project->name)? $investment->project->name:'';}}</td>
                                                    <td> {{isset($investment->project->Ideation->name)? $investment->project->Ideation->name:'';}}</td>
                                                    <td>
                                                    @php
                                                    $customer_name = App\Models\Customer::where('id',$investment->employee->customer_id)->first();
                                                    @endphp
                                                      {{$customer_name['name']}}
                                                   </td>
                                                    <td> {{isset($investment->employee->name)? $investment->employee->name:'';}}</td>
                                                    <td>${{isset($investment->investment_amount)?$investment->investment_amount:'';}}</td>
                                                    <td>{{isset($investment->payment_id)?$investment->payment_id:'N/A';}}</td>
                                                    <td> {{isset($investment->created_at)?date('Y-m-d',strtotime($investment->created_at)):'';}}</td>
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
<!-- </section>
</main>End #main -->

<div class="modal new fade in" id="sub2" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal_width">
        <div class="modal-content">
            <div class="modal-header primary_bg font-white">
                <button type="button" class="close " data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">New Transaction Summary                 </h4>
            </div>
            <div class="modal-body">
                <div class="table-scrollable">
                    <table class="table table-hover  order-column dataTable" role="grid"
                    aria-describedby="sample_5_info">
                    <thead>
                        <tr
                        class="secondary_bg font-white">

                        <th 
                        style="width: 88px;">
                        Investment
                    </th>
                    <th 
                    style="width: 88px;"> #Amount of
                    Transactions
                </th>

                <th 
                style="width: 59px;">Your Total
                Investment 
            </th>
            <th 
            style="width: 59px;"> Reference
            Account billed 
        </th>
        <th 
        style="width: 59px;"> Your Share of Total
        Emitted Volume
    </th>




</tr>
</thead>

<tbody>
    <tr >

        <td class="ft-16">- 10.000 €
        </td>
        <td class="ft-16">6</td>
        <td class="ft-16">110.000 €</td>
        <td class="ft-16">+ 10.000 €</td>
        <td class="ft-16">
            1.1 %
        </td>

    </tr>

</tbody>
</table>
</div>
<div class="form-actions col-md-12 float_center">
    <br>
    <a class="btn btn-primary" type="button">Place Order<i class="ml-20 bi bi-caret-right-fill" aria-hidden="true"></i> </a>

    <a type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>

</div>
</div>
<div class="modal-footer border-none">

</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade in" id="sub" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal_width">
        <div class="modal-content">
            <div class="modal-header primary_bg font-white">
                <button type="button" class="close " data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">New Transaction                  </h4>
            </div>
            <div class="modal-body">
                <div class="table-scrollable">
                    <table class="table table-hover  order-column dataTable" role="grid"
                    aria-describedby="sample_5_info">
                    <thead>
                        <tr
                        class="secondary_bg font-white">

                        <th 
                        style="width: 88px;">
                        Investment
                    </th>
                    <th 
                    style="width: 88px;"> 
                </th>

                <th 
                style="width: 59px;">
            </th>
            <th 
            style="width: 59px;"> Execute transaction
        </th>





    </tr>
</thead>

<tbody>
    <tr >

        <td class="ft-16"><input type="text" placeholder="-0.00 €" class="form-control  " name="username1" />
        </td>
        <td class="ft-16"></td>
        <td class="ft-16"></td>
        <td class="ft-16" data-toggle="modal"
        href="#sub2">
        <i class="bi bi-caret-right-fill" aria-hidden="true"></i>
    </td>

</tr>

</tbody>
</table>
</div>

</div>
<div class="modal-footer border-none">

</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<div class="modal new fade in" id="add2" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal_width">
        <div class="modal-content">
            <div class="modal-header primary_bg font-white">
                <button type="button" class="close " data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">New Transaction Summary                 </h4>
            </div>
            <div class="modal-body">
                <div class="table-scrollable">
                    <table class="table table-hover  order-column dataTable" role="grid"
                    aria-describedby="sample_5_info">
                    <thead>
                        <tr
                        class="secondary_bg font-white">

                        <th 
                        style="width: 88px;">
                        Investment
                    </th>
                    <th 
                    style="width: 88px;"> #Amount of
                    Transactions
                </th>

                <th 
                style="width: 59px;">Your Total
                Investment 
            </th>
            <th 
            style="width: 59px;"> Reference
            Account billed 
        </th>
        <th 
        style="width: 59px;"> Your Share of Total
        Emitted Volume
    </th>




</tr>
</thead>

<tbody>
    <tr >

        <td class="ft-16">+ 10.000 €
        </td>
        <td class="ft-16">6</td>
        <td class="ft-16">110.000 €</td>
        <td class="ft-16">- 10.000 €</td>
        <td class="ft-16">
            1.1 %
        </td>

    </tr>

</tbody>
</table>
</div>
<div class="form-actions col-md-12 float_center">
    <br>
    <a class="btn btn-primary" type="button">Place Order<i class="ml-20 bi bi-caret-right-fill" aria-hidden="true"></i> </a>

    <a type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>

</div>
</div>
<div class="modal-footer border-none">

</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<div class="modal fade in" id="add" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal_width">
        <div class="modal-content">
            <div class="modal-header primary_bg font-white">
                <button type="button" class="close " data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">New Transaction                  </h4>
            </div>
            <div class="modal-body">
                <div class="table-scrollable">
                    <table class="table table-hover  order-column dataTable" role="grid"
                    aria-describedby="sample_5_info">
                    <thead>
                        <tr
                        class="secondary_bg font-white">

                        <th 
                        style="width: 88px;">
                        Investment
                    </th>
                    <th 
                    style="width: 88px;"> Genussrecht-vertrag
                </th>

                <th 
                style="width: 59px;">Purchasing - Contract
            </th>
            <th 
            style="width: 59px;"> Execute transaction
        </th>

    </tr>
</thead>

<tbody>
    <tr >
        <td class="ft-16"><input type="text" placeholder="+0.00 €" class="form-control  " name="username1" />
        </td>
        <td class="ft-16"><i class="bi bi-link-45deg" aria-hidden="true"></i></td>
        <td class="ft-16"><i class="bi bi-link-45deg" aria-hidden="true"></i></td>
        <td class="ft-16" data-toggle="modal"
        href="#add2">
        <i class="bi bi-caret-right-fill" aria-hidden="true"></i>
    </td>

</tr>

</tbody>
</table>
</div>

</div>
<div class="modal-footer border-none">

</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>


@endsection