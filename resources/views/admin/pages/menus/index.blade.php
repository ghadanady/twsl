
@extends('admin.master')

@section('title')
    {{ trans('menus.page_name') }}
@endsection

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('menus.page_name') }}</h3>
                <div class="box-tools pull-left">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div>

                        <div class="box-body">
                            <div class="row" style="margin-bottom: 20px;">
                                <a href="#add-modal" class="btn btn-primary" data-toggle="modal" >
                                    <i class="fa fa-plus"></i> {{ trans('menus.btn_add') }}
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>{{ trans('menus.name_col') }}</th>
                                            <th>{{ trans('menus.shape_col') }}</th>
                                            <th class="text-center">{{ trans('menus.operations_col') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($menus as $menu)
                                            <tr>
                                                @php
                                                    $ar = $menu->translated('ar');
                                                    $en = $menu->translated('en');
                                                @endphp
                                                <td>{{ "$en->name | $ar->name" }}</td>
                                                <td><img style="width: 650px; height: 200px;" src="{{ url('storage/menus/'.$menu->shape_id.'.png') }}" alt=""></td>
                                                <td class="text-center">
                                                    <button type="button" data-url ="{{ route('admin.menus.info' , ['id' => $menu->id ]) }}" class="btn  btn-modal-view btn-success "  >
                                                        <li class="fa fa-pencil"> {{ trans('menus.btn_edit') }}</li>
                                                    </button>
                                                    <a data-url="{{ route('admin.menus.delete' , ['id' => $menu->id ]) }}" class="btn btn-danger modal-delete-btn"  >
                                                        <li class="fa fa-trash"> {{ trans('menus.btn_delete') }}</li>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $menus->links() }}
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </section>
            @section('modals')
                @include('admin.pages.menus.modals.add-menu')
            @endsection
        @endsection
