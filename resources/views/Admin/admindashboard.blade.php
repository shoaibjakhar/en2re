@extends('Admin.adminlayouts')

@section('content')
   
<div class=" page-content-wrapper">
    <div class="page-content hero2">
        <div class="container-fluid">
            <!-- start zubair -->
            <!-- row1 start -->
            <div class="row mt-5">
                <div class="col-md-1" id="col1">
                    <h4>Growth</h4>
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
                <div class="col-md-1" id="col1">
                    <h4>Impact</h4>
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
                    <h5>Revenue</h5>
                    <h6>Absolute</h6>
                    <div class="card bg-dark text-center" id="cardb">
                        <div class="card-body">
                            <div class="card-text" id="crdb">
                                20 Mio
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
                <div class="col-md-1" id="col1">
                    <h4>Community</h4>
                </div>
                <div class="col-md-2">
                    <h5>Employees (total)</h5>
                    <h6>Absolute</h6>
                    <div class="card bg-dark text-center" id="cardy">
                        <div class="card-body">
                            <div class="card-text" id="crdy">
                                537
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6 id="divpd">Change rate last 12 month</h6>
                    <div class="card bg-dark text-center" id="cardb">
                        <div class="card-body">
                            <div class="card-text" id="crdb">
                                +23%
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
                                782
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6 id="divpd">Change rate last 12 month</h6>
                    <div class="card bg-dark text-center" id="cardy">
                        <div class="card-body">
                            <div class="card-text" id="crdy">
                                +5%
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