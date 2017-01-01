
@extends('admin.master')

@section('title')
advertisements
@endsection

@section('content')


<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">advertisements</h3>
            <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>advertisement</th>
                                <th>address</th>
                                <th class="text-center">operation</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($ads as $ad)

                            <tr>
                                <td>{{$ad->position}}</td>
                                @if($ad->position == 'down' || $ad->position == 'right_corner')
                                    <td ><img src="{{url('storage/uploads/images/banners/'.$ad->image_name)  }}" style="width:300px; height:150px; "/>
                                    </td>
                               
                                    @elseif($ad->position == 'left_corner')
                                         <td ><img src="{{url('storage/uploads/images/banners/'.$ad->image_name)  }}" style="width:400px; height:150px; "/>
                                        </td> 
                                    @else
                                        <td ><img src="{{url('storage/uploads/images/banners/'.$ad->image_name)  }}" style="width:150px; height:150px; "/>
                                        </td>       
                                @endif
                                <td class="text-center">
                                    <a href="{{ route('admin.ads.edit',['id' => $ad->id]) }}" class="btn btn-success "  >
                                        <li class="fa fa-pencil">Edit</li>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</section>
@endsection
