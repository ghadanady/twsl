@extends('admin.master')
@section('title')
Contact Us edit
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
                <form action="{{route('contact_save')}}" onsubmit="return false;" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="master_id" value="{{$contact->id}}"/>

                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" value="{{$contact->name}}" class="form-control" required>
                    </div><!-- End form-group-->
                    <div class="form-group">
                        <label>Value:</label>
                        <input type="text"  name="value" class="form-control" value="{{$contact->value}}" required>
                    </div><!-- End form-group-->
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

