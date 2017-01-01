
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{ trans('menus.edit_modal_header' , ['title' => $menu->translated()->name ]) }}</h4>
        </div>
        <form class="ajax-form" action="{{ route('admin.menus.edit' , ['id' => $menu->id]) }}" enctype="multipart/form-data" method="post"
            onsubmit="return false;">
            {!! csrf_field() !!}
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>{{ trans('menus.en_name_header') }}</label>
                        <input type="text" class="form-control" value="{{ $menu->translated('en')->name }}" placeholder="{{ trans('menus.en_name_placeholder') }}"  name="en_name">
                    </div>
                    <div class="form-group col-md-3">
                        <label>{{ trans('menus.ar_name_header') }}</label>
                        <input type="text" class="form-control" value="{{ $menu->translated('ar')->name }}" placeholder="{{ trans('menus.ar_name_placeholder') }}"  name="ar_name">
                    </div>
                    <div class="form-group col-md-3 col-md-3">
                        <label>{{ trans('menus.status_header') }}</label>
                        <select class="form-control" name="active">
                            <option value="">{{ trans('menus.status_choose') }}</option>
                            <option {{ $menu->active == 1? 'selected' : '' }} value="1">{{ trans('menus.active') }}</option>
                            <option {{ $menu->active == 0? 'selected' : '' }} value="0">{{ trans('menus.not_active') }}</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>{{ trans('menus.categories_choose_header') }}</label>
                        <div class="checkbox" style="max-height: 225px; overflow-y: scroll;">
                            @php
                                $ids = $menu->categories->pluck('id')->toArray();
                            @endphp
                            @foreach (App\Category::all() as $cat)
                                @if($cat->isMain())
                                    @php
                                    $en = $cat->translated('en');
                                    $ar = $cat->translated('ar');
                                    @endphp
                                    <label>
                                        <input type="checkbox" {{ in_array($cat->id , $ids) ? 'checked' : '' }} name="categories[]" value="{{ $cat->id }}">
                                        {{ "$en->name | $ar->name" }}
                                    </label>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label>{{ trans('menus.shapes_header') }}</label>
                        <select class="form-control menu-shape" name="shape_id">
                            <option {{ $menu->shape_id == 1? 'selected' : '' }} data-img="{{ url('storage/menus/1.png') }}" value="1">{{ trans('menus.shape1') }}</option>
                            <option {{ $menu->shape_id == 2? 'selected' : '' }} data-img="{{ url('storage/menus/2.png') }}" value="2">{{ trans('menus.shape2') }}</option>
                        </select>
                    </div>
                    <div class="col-md-9 menu-preview" style=" height: 200px; background: url({{ url('storage/menus/'.$menu->shape_id.'.png') }}) ;background-size: 100% 100%;">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('menus.btn_cancel') }}</button>
                <button type="submit" data-loading="{{ trans('menus.loading') }}" class="btn btn-primary ajax-submit btn-sm btn-flat">
                    {{ trans('menus.btn_save') }} <span class="glyphicon glyphicon-save"> </span>
                </button>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
