@extends('Employee.employeelayouts')
@section('content')

<div class=" page-content-wrapper">
    <!-- start input -->
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
                                            <div class="row gutters">
                                            @foreach($blogs as $key =>$blog)
                                            <div class="col-sm-12 col-md-12 col-lg-12 box-bd" >
                                              <div class="card">
                                                  <img class="card-img-top" src="{{ asset('/uploads/blog-image/'.$blog->blogImages->image)}}" alt="{{$blog->blogImages->image}}" width="100%" >
                                                  <div class="card-body">
                                                    <h4 class="">{{isset($blog->header)? $blog->header:''}}</h4>
                                                    <p class="" style="text-align: justify;">{{isset($blog->description)? $blog->description:''}}
                                                       
                                                    </p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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
<!-- end input -->
</div>


<!-- </section> -->
<!-- </main>End #main -->





@endsection 