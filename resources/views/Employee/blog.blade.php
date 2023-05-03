@extends('Employee.employeelayouts')
@section('content')

<div class=" page-content-wrapper">
    <!-- start input -->
<!--     <div class="page-content hero2">
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
                                                        <strong>Blog/Feed View</strong>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="row gutters">
                                                @foreach($blogs as $key =>$blog)
                                                <div class="col-sm-6 col-md-4 col-lg-3 box-bd" >
                                                  <div class="card">
                                                      <img class="card-img-top" src="{{ asset('/uploads/blog-image/'.$blog->blogImages->image)}}" alt="{{$blog->blogImages->image}}" width="100%" height="180px">
                                                      <div class="card-body">
                                                        <h4 class="card-title">{{isset($blog->header)? $blog->header:''}}</h4>
                                                        <p class="card-text" style="text-align: justify;">{{isset($blog->description)? $blog->description:''}}

                                                        </p>
                                                        <a href="{{route('employee.blog.detail',$blog->id)}}">Read more</a>
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
</div> -->
<!-- end input -->
</div>

<?php 

function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}



?>

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
                                                <div class="col-md-2">
                                                    <img src="assets/img/log.png" class="w-100" alt="">
                                                </div>
                                                <div class="col-md-8">
                                                    <h2 class="">
                                                      <strong> HERBST SPEZIAL - 7% Verzinsung, nur noch bis 31.12.2022</strong> 
                                                  </h2>
                                              </div>
                                          </div>
                                          <div class="col-md-12 mb-40 box-bd">
                                            <h4 class="">
                                                <strong> Blog / Feed</strong> 
                                            </h4>

                                        </div>

                                        <div class="col-md-12 mb-40 box-bd">
                                             @foreach($blogs as $key =>$blog)
                                            <div class="col-md-4">
                                                <div class="portlet light bordered blog">
                                                    <div class="blog2">
                                                      <img class="card-img-top" src="{{ asset('/uploads/blog-image/'.$blog->blogImages->image)}}" alt="{{$blog->blogImages->image}}" width="100%" height="180px">   
                                                    <img src="assets/img/key.jpg" class="w-100" alt="">
                                                    
                                                      <h3 class="text-center"><i class="bi bi-wifi"></i></h3>
                                                      <h5 class="card-title"><b>{{isset($blog->header)? $blog->header:''}}</b></h5>
                                                      <h6 class="card-text">{{isset($blog->description)? $blog->description:''}}</h6>
                                                  </div>
                                                  <div class=" Center space-bet mt-2">
                                                   <!--    <a class="block" href="#">
                                                       Read More</a> -->
                                                         <a class="block" href="{{route('employee.blog.detail',$blog->id)}}">Read more</a>
                                                       <span class="mb-10"><small><?php echo get_time_ago( strtotime($blog->launch_date) ); ?></small> </span>
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
</div>
<!-- </section> -->
<!-- </main>End #main -->
<div class="modal fade in" id="edit-fd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal_width">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close " data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Edit Details </h4>
            </div>
            <div class="modal-body">
                <div class="form-body">
                    <div class="col-md-6">
                        <label class="control-label "> Application ID
                        </label>
                        <input type="text" name="name1" placeholder="122222" disabled class="form-control pd-0_5" />
                    </div>
                    <div class="col-md-6">
                        <label class="control-label "> Submitted On
                        </label>
                        <input type="text" name="name1" placeholder="Submitted On" class="form-control pd-0_5" />
                    </div>
                    <div class="col-md-6">
                        <label class="control-label "> Status
                        </label>
                        <input type="text" name="name1" placeholder="Status" class="form-control pd-0_5" />
                    </div>
                    <div class="col-md-6">
                        <label class="control-label "> Amount
                        </label>
                        <input type="text" name="name1" placeholder=" Amount " class="form-control pd-0_5" />
                    </div>

                    <div class="col-md-6">
                        <label class="control-label ">Issued On
                        </label>
                        <input type="text" name="name1" placeholder="Date" class="form-control pd-0_5" />
                    </div>



                    <div class="form-actions col-md-12 float_center">
                        <br>
                        <a class="btn btn-primary" type="button">Edit</a>

                        <a type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>

                    </div>

                </div>
            </div>
            <div class="modal-footer border-none">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade in" id="delete" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title ">Delete</h4>
            </div>
            <div class="modal-body"> Do you want to delete ? </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-danger " data-dismiss="modal">No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade in" id="color" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog" style="width: 390px;">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title ">Add your color theme....! </h4>
            </div>
            <div class="modal-body">
                Select Color :
                <input type="color" value="#006699">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Select</button>
                <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>  


@endsection 