@extends('Admin.adminlayouts')

@section('content')

<!-- start database table -->
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
                                        <form method="post" action="{{route('admin.add-benefit')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="portlet-body">
                                                <h4>Benefit
                                                </h4>
                                                <div class="col-md-6">
                                                    <label class="control-label left ">Benefit Nmae</label>
                                                    <input type="text" value="{{old('name')}}" class="form-control" name="name" required />
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label left ">Detail</label>
                                                    <input type="text" value="{{old('detail')}}" class="form-control" name="detail" required />
                                                </div>
                                                <div class="col-md-4 mt-4">
                                                    <label class="control-label left">Score 1 Start </label><br>
                                                    <input type="radio" name="score_1_start" value="Yes"  />
                                                    <label for="Yes">Yes</label>
                                                    <input type="radio" name="score_1_start" value="No"   />
                                                    <label for="No">No</label>
                                                </div>
                                                <div class="col-md-4 mt-4">
                                                    <label class="control-label left">Score 2 Start </label><br>
                                                    <input type="radio" name="score_2_start" value="Yes"  />
                                                    <label for="Yes">Yes</label>
                                                    <input type="radio" name="score_2_start" value="No"   />
                                                    <label for="No">No</label>
                                                </div>
                                                <div class="col-md-4 mt-4">
                                                    <label class="control-label left">Score 3 Start </label><br>
                                                    <input type="radio" name="score_3_start" value="Yes"  />
                                                    <label for="Yes">Yes</label>
                                                    <input type="radio" name="score_3_start" value="No"   />
                                                    <label for="No">No</label>
                                                </div>
                                                <div class="col-md-4 mt-4">
                                                    <label class="control-label left">Score 4 Start </label><br>
                                                    <input type="radio" name="score_4_start" value="Yes"  />
                                                    <label for="Yes">Yes</label>
                                                    <input type="radio" name="score_4_start" value="No"   />
                                                    <label for="No">No</label>
                                                </div>
                                                <div class="col-md-4 mt-4">
                                                    <label class="control-label left">Score 5 Start </label><br>
                                                    <input type="radio" name="score_5_start" value="Yes"  />
                                                    <label for="Yes">Yes</label>
                                                    <input type="radio" name="score_5_start" value="No"   />
                                                    <label for="No">No</label>
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
                                                    <strong>Benefit List</strong>
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

                                                                   <th style="width:20%;"> ID</th>
                                                                   <th style="width:20%;">Benefit Nmae
                                                                   </th>


                                                                   <th style="width:20%;">Detail
                                                                   </th>
                                                                   <th style="width:20%;">Score 1 Start</th>
                                                                   <th style="width:20%;">Score 2 Start</th>
                                                                   <th style="width:20%;">Score 3 Start</th>
                                                                   <th style="width:20%;">Score 4 Start</th>
                                                                   <th style="width:20%;">Score 5 Start</th>


                                                                   <th> Action</th>

                                                               </tr>
                                                           </thead>

                                                           <tbody>
                                                            @foreach($benefits as $key =>$benefit)
                                                            <tr data-toggle="collapse" class="" data-target="#sample_5">
                                                                <td class="ft-16"><b> {{$benefit->id}}</b>
                                                                </td>
                                                                <td class="ft-16">{{isset($benefit->name)?$benefit->name:''}}</td>
                                                                <td class="ft-16">{{isset($benefit->details)?$benefit->details:''}}</td>
                                                                <td class="ft-16">{{isset($benefit->score_1_start)?$benefit->score_1_start:''}}</td>
                                                                <td class="ft-16">{{isset($benefit->score_2_start)?$benefit->score_2_start:''}}</td>
                                                                <td class="ft-16">{{isset($benefit->score_3_start)?$benefit->score_3_start:''}}</td>
                                                                <td class="ft-16">{{isset($benefit->score_4_start)?$benefit->score_5_start:''}}</td>
                                                                <td class="ft-16">{{isset($benefit->score_5_start)?$benefit->score_5_start:''}}</td>

                                                                <td>
                                                                    <a href="{{route('admin.benefit.delete',$benefit->id)}}"> <span class="glyphicon glyphicon-trash"></span></a></td>
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