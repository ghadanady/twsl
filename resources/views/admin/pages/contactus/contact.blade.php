@extends('admin.master')
@section('title')
Contact Us
@endsection
@section('content')


<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Show Data</h3>
            <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>

            <div class="box-body">
                <div class="row" style="margin-bottom: 20px;">
                    <a href="#add" class="btn btn-primary" data-toggle="modal" >
                        <i class="fa fa-plus"></i>Add new
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Language</th>
                                <th>Edit</th>
                                <th class="text-center">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $detail)
                            <tr>
                                <td>{{$detail->name}}</td>
                        <form action="{{route('contact_edit')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input type="hidden" name="master_id" value="{{$detail->master_id}}">
                            <td>
                                <select id="lang{{$detail->master_id}}Select" name="lang" class="select-lang form-control">
                                    @foreach($lang as $language)
                                    <option value="{{$language->lang_code}}">{{$language->lang}}</option>
                                    @endforeach
                                </select>
                            <td>
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-edit"></i>
                                    Edit
                                </button>
                            </td>
                        </form>
                        <td class="text-center">
                            <a href="#trans" data-id="{{$detail->master_id}}" data-lang="en" data-url="" class="trans-btn btn btn-primary" data-toggle="modal">
                                <li class="fa fa-pencil"> Translate</li>
                            </a>
                            <a data-url="contact/contact/delete/{{$detail->master_id}}" class="btn btn-danger btndelet"  >
                                <li class="fa fa-trash"> Delete</li>
                            </a>
                        </td>
                        </tr>
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
@section('modals')
@include('admin.pages.contactus.modals.add')
@include('admin.pages.contactus.modals.newlang')
@endsection 