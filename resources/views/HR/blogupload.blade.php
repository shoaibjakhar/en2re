@extends('HR.hrlayouts')
@section('content')

<div class=" page-content-wrapper">

    <div class="page-content hero2" style="min-height:505px!important;">
        <div class="portlet light bordered " id="form_wizard_1">
            <div class="portlet-body form">
                <div class="row">

                    <div class="col-md-12 mx-0">
                        <div>
                            <div class="form-group">

                                <div class="left">
                                    <div class="wrapper center-block">
                                        <div class="left">
                                            <div class="col-md-12 mb-40 box-bd">
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
                                            <form method="post" action="{{route('hr.add-blog')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="portlet-body">
                                                    <h4>Blog
                                                    </h4>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Blog Name</label>
                                                        <input type="text" value="{{old('name')}}" class="form-control" name="name" required />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Blog Header</label>
                                                        <input type="text" value="{{old('header')}}" class="form-control" name="header" required />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left">Launch Date</label>
                                                        <input type="date" value="<?php echo Date('Y-m-d')?>" class="form-control" name="launch_date" required />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Campaign  Message</label>
                                                        <input type="text" value="{{old('campaign_message')}}" class="form-control" name="campaign_message" required/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Description</label>
                                                        <textarea  name="description" style="width: 100%;" cols="50" required >{{old('description')}}</textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label left ">Images </label>
                                                        <input type="file" name="images[]"  class="form-control"  accept="image/png, image/jpeg, image/jpeg" multiple required/>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 text-right">
                                                        <button type="submit" value="" class="btn btn-primary  text-center" >Submit</button>
                                                    </div>

                                                </div>
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
<!-- end database table 1 -->
</div>
<!-- start database table -->
<div class=" page-content-wrapper">

    <div class="page-content hero2" >
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
                                                    <strong>Blog List</strong>
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
                                                                <tr class="secondary_bg font-white">

                                                                 <th >SR.NO</th>
                                                                 <th >Blog name
                                                                 </th>


                                                                 <th >Blog header
                                                                 </th>
                                                                 <th >Launch date
                                                                 </th>
                                                                 <th >Campaign message</th>
                                                                 <th >Description</th>
                                                                 <th> Action</th>

                                                             </tr>
                                                         </thead>

                                                         <tbody>
                                                            @foreach($blogs as $key =>$blog)
                                                            <tr data-toggle="collapse" class="" data-target="#sample_5">
                                                                <td >{{($key+1)}}
                                                                </td>
                                                                <td >{{isset($blog->name)?$blog->name:''}}</td>
                                                                <td >{{isset($blog->header)?$blog->header:''}}</td>
                                                                <td >{{isset($blog->launch_date)?$blog->launch_date:''}}</td>
                                                                <td >
                                                                    {{isset($blog->campaign_message)?$blog->campaign_message:''}}
                                                                </td>
                                                                <td >
                                                                    {{isset($blog->description)?$blog->description:''}}
                                                                </td>
                                                                <td>
                                                                    <a href="{{route('hr.blog.delete',$blog->id)}}"> <span class="glyphicon glyphicon-trash"></span></a></td>
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
<!-- end database table 1 -->
</div>
@endsection