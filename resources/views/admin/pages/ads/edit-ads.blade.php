@extends('admin.master')

@section('title')
edit advertisements
@endsection

@section('content')
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">edit advertisements</h3>
            <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>

            <div class="modal-content">
                <form action="{{route('admin.ads.edit',['id'=>$ads->id])}}" enctype="multipart/form-data" method="post"
                      onsubmit="return false;">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>image</label>
                            <div class="thumbnail file-box">
                                <img alt="728x418" class="file-btn"  style="height: 300px; width: 100%; display: block; cursor: pointer;" src="{{ url('storage/uploads/images/banners/'.$ads->image_name) }}" data-holder-rendered="true">
                                <div class="caption text-center">
                                    <input type="file" class="btn btn-primary" role="button" name="image_name" accept="image/*" value="choose inmage">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">exit</button>
                        <button type="button" id="users-edit-modal-btn" class="btn btn-primary btn-sm btn-flat addBTN">
                            save <span class="glyphicon glyphicon-save"> </span>
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
