@extends('Employee.employeelayouts')
@section('content')
<!-- start database table -->
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

                     <div class="wrapper center-block">
                      <div class="left">
                        <div class="col-md-12  justify-space-between">
                          <div class="col-md-12 mb-40 box-bd">
                           <div>
                             <h4 class="">
                              You’re going  to invest ${{$request->employee_investment_amount}}!
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-md-12 text-center">
                              <label><img src="{{ asset('assets/img/payment-method/stripe.png') }}" width="100px"></label>
                              <form action="{{route('employee.stripe')}}" method="post">
                                @csrf
                                <input type="hidden" name="project_id" value="{{$request->id}}">
                                <input type="hidden" name="ammount" value="{{$request->employee_investment_amount}}">
                                <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="{{ $stripe_public_key }}"
                                data-amount="<?php  echo (100*$request->employee_investment_amount);?>"
                                data-name="EN2RE"
                                data-description="Transection"
                                data-image="{{ asset('assets/img/payment-method/stripe.png') }}"
                                data-currency="usd"
                                data-email="{{$emp_email}}" 

                                >
                              </script>
                              <!-- data-email="<?php  //echo isset($email)? $email:'';?> -->
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
</div>
</div>

@endsection