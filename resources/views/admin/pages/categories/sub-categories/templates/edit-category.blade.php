<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">تعديل قسم {{ $category->name }}</h4>
</div>
<form action="{{ route('admin.categories.edit' , ['id' => $category->id , 'type' => 'sub']) }}" enctype="multipart/form-data" method="post"
    onsubmit="return false;">
    {!! csrf_field() !!}
    <div class="modal-body">
        @php
            $en = $category->translated('en');
            $ar = $category->translated('ar');
        @endphp
        <div class="row">
            <div class="form-group col-md-6">
                <label>اسم القسم</label>
                <input type="text" class="form-control" value="{{ $en->name }}" placeholder="مثال: اخبار السعوديه"  name="en_name">
            </div>
            <div class="form-group col-md-6">
                <label>اسم القسم</label>
                <input type="text" class="form-control" value="{{ $ar->name }}" placeholder="مثال: اخبار السعوديه"  name="ar_name">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>حاله القسم</label>
                <select class="form-control" name="active">
                    <option value="1" {{ $category->active? 'selected' : '' }}>فعال</option>
                    <option value="0" {{ !$category->active? 'selected' : '' }}>غير فعال</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>القسم الرئيسي</label>
                <select class="form-control" name="parent_id">
                    @foreach (App\Category::all() as $cat)
                        @if($cat->isMain())
                            @php
                                $en = $cat->translated('en');
                                $ar = $cat->translated('ar');
                            @endphp
                            <option value="{{ $cat->id }}" {{ $category->parent_id === $cat->id ? 'selected' : '' }}>{{ "$en->name | $ar->name" }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
        <button type="button" class="btn edit-modal-submit btn-primary btn-sm btn-flat">
            حفظ<span class="glyphicon glyphicon-save"> </span>
        </button>
    </div>
</form>