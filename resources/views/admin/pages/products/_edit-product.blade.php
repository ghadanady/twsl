@extends('admin.master')

@section('content')
    <section class="content">
        <form class="ajax-form" action="{{ route('admin.products.edit' , ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ trans('products.visible_content_header') }}</h3>
                            <div class="box-tools pull-left">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <div class="row">
                                @foreach ($product->getImages() as $img)
                                    <div class="col-md-4 ajax-target">
                                        <div class="thumbnail">
                                            <img alt="290X180" style="height: 180px; width: 100%; display: block; cursor: pointer;" src="{{ $img->url }}" data-holder-rendered="true">
                                            <div class="caption text-center">
                                                <button type="button" data-url="{{ route('admin.products.images.delete' ,['product_id' => $product->id , 'image_id' => $img->id ]) }}" data-loading="{{ trans('admin_global.loading') }}" class="ajax-delete btn btn-warning"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-md-4 file-box">
                                    <div class="thumbnail">
                                        <img alt="290X180" class="file-btn"  style="height: 180px; width: 100%; display: block; cursor: pointer;" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=290%C3%97180%20or%20larger&w=290&h=180" data-holder-rendered="true">
                                        <div class="caption text-center">
                                            <input type="file" class="col-md-8 btn btn-primary" role="button" name="imgs[]" accept="image/*">
                                            <button type="button" class="file-generate btn btn-success"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ trans('products.textual_content_header') }}</h3>
                            <div class="box-tools pull-left">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4">الاسم </label>
                                    <input class="form-control" type="text" name="name" placeholder="{{ trans('products.en_name_placeholder') }}" value="{{ $product->name }}">
                                </div>
                               

                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="col-md-4">السعر </label>
                                    <input class="form-control" type="number" min="1" name="price" placeholder="{{ trans('products.price_placeholder') }}" value="{{ $product->price }}">
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="col-md-4">القسم </label>
                                    <select name="category_id" class="form-control">
                                        <option value="">اختر القسم </option>
                                        @foreach ($categories['main'] as $category)
                                            @php
                                                $arCat = $category->translated('ar');
                                                $enCat = $category->translated('en');
                                            @endphp
                                            <optgroup label="{{ "$enCat->name | $arCat->name" }}">
                                                @foreach ($category->subCategories as $sub)
                                                    @php
                                                        $arSubCat = $sub->translated('ar');
                                                        $enSubCat = $sub->translated('en');
                                                    @endphp
                                                    <option value="{{ $sub->id }}" {{ $sub->id === $product->category_id ? 'selected' : '' }}>{{ "$enSubCat->name | $arSubCat->name" }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                        @if (!empty($categories['other']))
                                            <optgroup label="{{ trans('products.sub_categories_header') }}">
                                                @foreach ($categories['other'] as $category)
                                                    @php
                                                        $arCat = $category->translated('ar');
                                                        $enCat = $category->translated('en');
                                                    @endphp
                                                    <option value="{{ $category->id }}" {{ $category->id === $product->category_id ? 'selected' : '' }}>{{ "$enCat->name | $arCat->name" }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="col-md-4">الحالة </label>
                                    <select name="active" class="form-control">
                                        <option value="">ختر الحله  </option>
                                        <option value="1" {{ $product->active? 'selected' : ''}}>{{ trans('products.active') }}</option>
                                        <option value="0" {{ $product->active? '' : 'selected'}}>{{ trans('products.not_active') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="col-md-6">الكميه المتوفرة</label>
                                    <input class="form-control" type="number" min="1" name="stock" placeholder="{{ trans('products.stock_placeholder') }}" value="{{ $product->stock }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-6">نسبه الخصم</label>
                                    <input class="form-control" type="number" min="0" name="discount" placeholder="{{ trans('products.discount_placeholder') }}" value="{{ $product->discount }}">
                                </div>
                               

                            </div>
                            <div class="row">
                                <label class="col-md-4">
                                وصف المنتج
                                </label>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control tiny-editor" name="desc" rows="3" placeholder="">الوصف</textarea>
                                </div>
                            </div>
                           


                        </div>
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-app ajax-submit">
                                <i class="fa fa-save"></i> حفظ 
                            </button>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>

            {{ csrf_field() }}
        </form>
    </section>
@endsection
