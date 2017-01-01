
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">اضافه قسم جديد</h4>
            </div>
            <form action="{{ route('admin.categories.add',['type' => 'main']) }}" enctype="multipart/form-data" method="post"
                  onsubmit="return false;">
                {!! csrf_field() !!}
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group col-md-4 col-sm-4">
                            <label>اسم القسم</label>
                            <input type="text" class="form-control" placeholder="مثال: اخبار السعوديه"  name="en_name">
                        </div>
                        <div class="form-group col-md-4 col-sm-4">
                            <label>اسم القسم</label>
                            <input type="text" class="form-control" placeholder="مثال: اخبار السعوديه"  name="ar_name">
                        </div>
                        <div class="form-group col-md-4 col-sm-4">
                            <label>حاله القسم</label>
                            <select class="form-control" name="active">
                                <option value="">-- اختر الحاله --</option>
                                <option value="1">فعال</option>
                                <option value="0">غير فعال</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                    <button type="button" id="add-modal-submit" class="btn btn-primary btn-sm btn-flat">
                        حفظ<span class="glyphicon glyphicon-save"> </span>
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
