@extends('HR.hrlayouts')
@section('content')

<!-- start body -->
<div class=" page-content-wrapper">
    <!-- start input form -->
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

                                            <div class="col-md-12  justify-space-between">
                                                <div class="col-md-12 box-bd">
                                                   @if ($errors->any())
                                                   <div class="alert-danger pl-40">
                                                       <ol>
                                                           @foreach ($errors->all() as $error)
                                                           <li style="list-style-type:square !important">{{$error}}</li>
                                                           @endforeach
                                                       </ol>
                                                   </div>
                                                   @endif
                                                   @if (session('success'))
                                                   <div class="alert-success pl-40">
                                                    {{ session('success') }}
                                                </div>
                                                @endif
                                                <form method="post" action="{{route('hr.add-faq')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="portlet-body">
                                                        <h2>Add FAQ Item </h2>
                                                        <div class="col-md-12">
                                                            <label class="control-label left ">Question*</label>
                                                            <input type="text" value="{{old('question')}}" class="form-control" name="question" required />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="control-label left ">Answer* </label>
                                                            <textarea  name="answer" style="width: 100%;" cols="50" required >{{old('answer')}}</textarea>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 text-right">
                                                            <button type="submit" value="" class="btn btn-primary  text-center" >Submit</button>
                                                        </div>

                                                        
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- end input form 1 -->

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
                                                <strong>FAQ List</strong>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-40 box-bd">
                                        <div class="portlet-body filter-none">
                                            <div id="sample_5_wrapper" class="dataTables_wrapper">
                                                <div class="table Add">
                                                 <div class="table-scrollable">
                                                    <table class="collapse in table table-hover  order-column dataTable" id="sample_5" role="grid" aria-describedby="sample_5_info">

                                                        <thead>
                                                            <tr role="row " class="secondary_bg font-white">

                                                                <th style="">
                                                                    SR.NO
                                                                </th>
                                                                <th style="">
                                                                    Question
                                                                </th>
                                                                <th style="">Answer
                                                                </th>
                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach($faqs as $key=> $faq)

                                                            <tr class="" role="row">

                                                                <td class="">{{($key+1)}}
                                                                </td>
                                                                <td class="">{{isset($faq->question)?$faq->question:''}}</td>
                                                                <td class="">{{isset($faq->answer)?$faq->answer:''}}</td>

                                                                <td class="">
                                                                    <!-- <a href=""> <i class="bi bi-eye-fill text-dark" aria-hidden="true" style="font-size: 20px;;color: black;"></i></a> -->
                                                                    <a href="{{route('hr.faq.delete',$faq->id)}}"> <span class="glyphicon glyphicon-trash" ></span></a>
                                                                </td>
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
</div>
<!-- end body -->
<!-- end input form -->
@endsection