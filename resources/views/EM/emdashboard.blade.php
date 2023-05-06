@extends('EM.EMlayouts')
@section('content')

<div class=" page-content-wrapper">
    <div class="page-content hero2">
        <div class="container-fluid">

            <!-- row start -->
            <div class="row">

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
                <!-- start icons -->
                <div class="col-md-2" id="icon">
                    <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size:25px;color: black;"></i></a>
                    <span class="glyphicon glyphicon-star-empty" style="font-size: 20px;"></span>
                    <a href="" class="btn btn-lg">
                        <span class="glyphicon glyphicon-menu-down" style="font-size: 25px;color: black;"></span>
                    </a>
                </div>
                <!-- end icons -->
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
                    <div class="card bg-dark text-center" id="cardy">
                        <div class="card-body">
                            <div class="card-text" id="crdy">
                                +5%
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start icons -->
                <div class="col-md-2" id="icon">
                    <a href=""> <i class="bi bi-eye-fill" aria-hidden="true" style="font-size:25px;color: black;"></i></a>
                    <span class="glyphicon glyphicon-star-empty" style="font-size: 20px;"></span>
                    <a href="" class="btn btn-lg">
                        <span class="glyphicon glyphicon-menu-down" style="font-size: 25px;color: black;"></span>
                    </a>

                </div>
                <!-- end icons -->
            </div>
            <!-- row end -->

        </div>
    </div>
</div>

@endsection