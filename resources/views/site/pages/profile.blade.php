@extends('site.layouts.base.master')

@section('title')

@endsection
@section('content')
<div class="inner-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <h2 class="headline3"> الصفحة الشخصية </h2>
            </div>
@php 
$loginUser=Auth::guard('members')->user();
@endphp
  <div class="col-xs-12">
                   
                    @if(isset($errors) && count($errors) > 0)
                        <div class="alert alert-danger alert-dismissable">
                            <button class="close" data-dismiss="alert" area-hidden="true">&times;</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>
                                        {!!$error!!}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('success'))
                    @foreach(session()->pull('success') as $msg)
                       <div class="alert alert-success">
                        
                           {!!$msg!!}
                     </div>
                    @endforeach
                       
                    @endif

                </div>

            <div class="col-xs-12 col-md-9 col-lg-9">
                <div class="forms">
                    <form action="{{url('profile/edit')}}" method="post">
                        {{ csrf_field() }}

                            <div class="row">
                                <div class="col-xs-12 col-md-6 rmb20">
                                    <div class="row-form">
                                        <input type="text" name="f_name"  value="{{$loginUser->f_name}}"class="full-form" placeholder="محمد أحمد عبدالله" />
                                         
                                    </div>
                                    <div class="row-form">
                                        <input type="text"
                                        name="countery"  value="{{$loginUser->countery}}"
                                         class="full-form" placeholder="السعودية" />
                                         
                                    </div>
                                    <div class="row-form">
                                        <input type="text"
                                        name="city"  value="{{$loginUser->city}}"
                                         class="full-form" placeholder="الرياض" />
                                         
                                    </div>
                                    <div class="row-form">
                                        <input type="text"
                                        name="facebook"  value="{{$loginUser->facebook}}"
                                         class="full-form" placeholder="فيسبوك" />
                                         
                                    </div>
                                    <div class="row-form">
                                        <input type="text"
                                          name="twitter"  value="{{$loginUser->twitter}}" 
                                        
                                        class="full-form" placeholder="تويتر" />
                                         
                                    </div>
                                   
                                </div>
                                <div class="col-xs-12 col-md-6 rmb20">
                                    <div class="row-form">
                                        <input type="text" class="full-form" 
                                        name="email"  value="{{$loginUser->email}}"
                                        placeholder="name@mail.com" />
                                         
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form"
                                        name="phone"  value="{{$loginUser->phone}}"
                                         placeholder="0096650123456789" />
                                         
                                    </div>
                                     <div class="row-form">
                                        <input type="text" 
                                        name="linked" 
                                        value="{{$loginUser->linked}}"
                                        class="full-form" placeholder="لينكدان" />
                                         
                                    </div>

                                    <div class="row-form">

                                        <input type="text" 
                                        name="google" 
                                        value="{{$loginUser->google}}"
                                        class="full-form" placeholder="جوجل بلس" />
                                         
                                    </div>
                                    <div class="row-form">
                                        <input type="text"
                                        name="skype" 
                                        value="{{$loginUser->skype}}"
                                        class="full-form" placeholder="سكايب" />
                                         
                                    </div>
                                    <div class="row-form but-holder">
                                        <button type="submit" class="sub-b">تعديل</button>
                                    </div>
                                </div>
                            </div>

                    </form>
                </div>


            </div><!--right-->
            <div class="col-xs-12 col-md-6 col-lg-3 text-center">
               
                <div class="avatar">
                    <img src="" alt="u" />
        <input type="file" name="image" 
        style="background-image:{{ asset('assets/site/imgs/user-info.png') }} " name="">
                    <a href="#"> <i class="fa fa-camera"></i> </a>
                </div>

            </div><!--left-->



        </div>
    </div>
</div>



<div class="small-imgs">
     @include('site.layouts.partials.tradmark')
</div>
</div>

@endsection
