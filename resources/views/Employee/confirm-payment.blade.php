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
                                data-key="{{ env('STRIPE_KEY') }}"
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
<script src="https://js.stripe.com/v3/"></script>
<script>
  var stripe = Stripe('pk_test_51KaezqEovF6hQW1HZ90ISJTksYOogoSJFgqZyqoRDLCSgnSeodYrEtw6KBs6XnG0s4f8C4tdzJDQovaaldfvki2x004dl46B5x');

// Create a SEPA Direct Debit source
stripe.createSource({
  type: 'sepa_debit',
  amount: 2000, // Amount in cents
  currency: 'eur',
  owner: {
    name: 'John Doe',
    email: 'john.doe@example.com',
    address: {
      line1: '123 Main Street',
      city: 'Berlin',
      postal_code: '12345',
      country: 'DE',
    },
  },
});
</script>




@endsection