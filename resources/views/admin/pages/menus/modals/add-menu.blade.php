
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ trans('menus.btn_add') }}</h4>
            </div>
            <form class="ajax-form" action="{{ route('admin.menus.add') }}" enctype="multipart/form-data" method="post"
            onsubmit="return false;">
            {!! csrf_field() !!}
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>{{ trans('menus.en_name_header') }}</label>
                        <input type="text" class="form-control" placeholder="{{ trans('menus.en_name_placeholder') }}"  name="en_name">
                    </div>
                    <div class="form-group col-md-3">
                        <label>{{ trans('menus.ar_name_header') }}</label>
                        <input type="text" class="form-control" placeholder="{{ trans('menus.ar_name_placeholder') }}"  name="ar_name">
                    </div>
                    <div class="form-group col-md-3 col-md-3">
                        <label>{{ trans('menus.status_header') }}</label>
                        <select class="form-control" name="active">
                            <option value="">{{ trans('menus.status_choose') }}</option>
                            <option value="1">{{ trans('menus.active') }}</option>
                            <option value="0">{{ trans('menus.not_active') }}</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>{{ trans('menus.categories_choose_header') }}</label>
                        <div class="checkbox" style="max-height: 225px; overflow-y: scroll;">
                            @foreach (App\Category::all() as $cat)
                                @if($cat->isMain())
                                    @php
                                    $en = $cat->translated('en');
                                    $ar = $cat->translated('ar');
                                    @endphp
                                    <label>
                                        <input type="checkbox" name="categories[]" value="{{ $cat->id }}">
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
                            <option data-img="{{ url('storage/menus/1.png') }}" value="1">{{ trans('menus.shape1') }}</option>
                            <option data-img="{{ url('storage/menus/2.png') }}" value="2">{{ trans('menus.shape2') }}</option>
                        </select>
                    </div>
                    <div class="col-md-9 menu-preview" style=" height: 200px; background: url({{ url('storage/menus/1.png') }}) ;background-size: 100% 100%;">
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
</div><!-- /.modal -->
