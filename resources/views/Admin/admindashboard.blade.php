@extends('Admin.adminlayouts')

@section('content')

<div class=" page-content-wrapper">
    <div class="page-content hero2">
        <div class="container-fluid">
            <!-- start zubair -->
            <!-- row1 start -->
            <div class="row mt-5">
                <div class="col-md-1 pl-0" id="col1">
                    <h5>Growth</h5>
                </div>
                <div class="col-md-2">
                    <h5>Customer growth</h5>
                    <h6>Absolute</h6>
                    <div class="card bg-dark text-center" id="cardb">
                        <div class="card-body">
                            <div class="card-text" id="crdb">
                                2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6 id="divpd">Change rate last 12 month</h6>
                    <div class="card bg-dark text-center" id="cardb">
                        <div class="card-body">
                            <div class="card-text" id="crdb">
                                +10%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" id="icon">
                    <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size:25px;color: black;"></i></a>
                    <span class="glyphicon glyphicon-star-empty" style="font-size: 20px;"></span>
                    <a href="" class="btn btn-lg">
                        <span class="glyphicon glyphicon-menu-down" style="font-size: 25px;color: black;"></span>
                    </a>
                </div>
                <div class="col-md-2">
                    <h5>Revenue</h5>
                    <h6>Absolute</h6>
                    <div class="card bg-dark text-center" id="cardb">
                        <div class="card-body">
                            <div class="card-text" id="crdb">
                                12305
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6 id="divpd">Change rate last 12 month</h6>
                    <div class="card bg-dark text-center" id="cardr">
                        <div class="card-body">
                            <div class="card-text textdanger" id="crdr">
                                -3%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1" id="icon">
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="color:black;"></i></a>
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="color:black;"></i></a>
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="color:black;"></i></a>
                </div>
            </div>
            <!-- row1 end -->

            <!-- row2 start -->
            <div class="row">
                <div class="col-md-1 pl-0" id="col1">
                    <h5>Impact</h5>
                </div>
                <div class="col-md-2">
                    <h5>CO2 Reduction</h5>
                    <h6>Absolute</h6>
                    <div class="card bg-dark text-center" id="cardy">
                        <div class="card-body">
                            <div class="card-text" id="crdy">
                                2k t
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6 id="divpd">Change rate last 12 month</h6>
                    <div class="card bg-dark text-center" id="cardy">
                        <div class="card-body">
                            <div class="card-text" id="crdy">
                                -5%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" id="icon">
                    <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size:25px;color: black;"></i></a>
                    <span class="glyphicon glyphicon-star-empty" style="font-size: 20px;"></span>
                    <a href="" class="btn btn-lg">
                        <span class="glyphicon glyphicon-menu-down" style="font-size: 25px;color: black;"></span>
                    </a>
                </div>
                <div class="col-md-2">
                    <h5>Investment</h5>
                    <h6>Absolute</h6>
                    <div class="card bg-dark text-center" id="cardb">
                        <div class="card-body">
                            <div class="card-text" id="crdb">
                                ${{isset($totat_investment_amount)? $totat_investment_amount:'0'}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6 id="divpd">Change rate last 12 month</h6>
                    <div class="card bg-dark text-center" id="cardb">
                        <div class="card-body">
                            <div class="card-text" id="crdb">
                                +14%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1" id="icon">
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="color:black;"></i></a>
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="color:black;"></i></a>
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="color:black;"></i></a>
                </div>
            </div>
            <!-- row2 end -->

            <!-- row3 start -->
            <div class="row">
                <div class="col-md-1 pl-0" id="col1">
                    <h5>Community</h5>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Invested Employees(Total)</h5>
                        </div>
                        <div class="col-md-6">
                            <h6>Absolute</h6>
                            <div class="card bg-dark text-center" id="cardy">
                                <div class="card-body">
                                    <div class="card-text" id="crdy">
                                        {{isset($total_invested_employee)? $total_invested_employee:''}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 id="">Change rate last 12 month</h6>
                            <div class="card bg-dark text-center" id="cardb">
                                <div class="card-body">
                                    <div class="card-text" id="crdb">
                                        +23%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" id="icon">
                    <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size:25px;color: black;"></i></a>
                    <span class="glyphicon glyphicon-star-empty" style="font-size: 20px;"></span>
                    <a href="" class="btn btn-lg">
                        <span class="glyphicon glyphicon-menu-down" style="font-size: 25px;color: black;"></span>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Investment per Employee</h5>
                        </div>
                        <div class="col-md-6">
                            <h6>Absolute</h6>
                            <div class="card bg-dark text-center" id="cardy">
                                <div class="card-body">
                                    <div class="card-text" id="crdy">
                                        @if(isset($totat_investment_amount) && isset($total_invested_employee) && $totat_investment_amount !=0 && $total_invested_employee !=0)
                                        ${{$totat_investment_amount / $total_invested_employee}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 id="">change rate last 3 month</h6>
                            <div class="card bg-dark text-center" id="cardb">
                                <div class="card-body">
                                    <div class="card-text" id="crdb">
                                        +5%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1" id="icon">
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="color:black;"></i></a>
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="color:black;"></i></a>
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="color:black;"></i></a>
                </div>
            </div>
            <!-- row3 end -->
            <!-- end zubair -->
        </div>
    </div>
</div>

@endsection