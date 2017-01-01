@extends('admin.master')
@section('title')
Product edit
@endsection
@section('content')  
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="form-content">
                <form action="{{route('product_save')}}" onsubmit="return false;" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="master_id" value="{{$details->id}}"/>

                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" value="{{$details->name}}" class="form-control" >
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea name="description" class="form-control" >{{$details->description}}</textarea>
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Price :</label>
                        <input type="text" name="price" value="{{$details->master['price']}}" class="form-control" >
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Amount:</label>
                        <input type="text" name="amount" value="{{$details->master['amount']}}" class="form-control" >
                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Discount:</label>
                        @if($offer == null)
                        <input type="text" name="discount" class="form-control" >
                        @else
                        <input type="text" name="discount" value="{{$offer->discount}}"  class="form-control" >
                        @endif

                    </div><!-- End form-group-->

                    <div class="form-group">
                        <label>Date:</label>
                        <input type="text" name="date" class="form-control " id="calendar" >
                    </div><!-- End form-group-->

                    @foreach($images as $image)
                    <div class="col-md-6 form-group">
                        <img width="200px" height="200px" src="{{url('storage/uploads/images/products/'.$image->image_name)}}">
                        <input  name="image_name[{{$image->id}}]" type="file">
                    </div><!--End form-group-->
                    @endforeach

                    <div class="text-center">
                        <button type="button" class="btn btn-primary btn-lg btn-flat addBTN">
                            Edit <span class="glyphicon glyphicon-save"> </span>
                        </button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div>
</div>
<!-- /.box-body -->
</section>
@endsection