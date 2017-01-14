@extends('site.layouts.base.master')

@section('title')

@endsection
@section('content')
    <div class="inner-container">
        <div class="container">
            <div class="row">

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
                    <h2 class="headline2"> التسجيل </h2>
                    <div class="forms"  >
                        <form  action="{{url('auth/register')}}" method="post">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="row-form req">
                                        <input  name="f_name" type="text" class="full-form" placeholder="الإسم الأول" />
                                    </div>
                                    <div class="row-form">
                                        <input name="job" type="text" class="full-form" placeholder="الوظيفة" />
                                    </div>
                                     <div class="row-form req">
                                        <input type="password" name="password" class="full-form" placeholder="كلمة المرور" />
                                    </div>
                                    
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="row-form req">
                                        <input type="text" name="l_name" class="" placeholder="الإسم الأخير" />
                                    </div>
                                    <div class="row-form req">
                                        <input type="email" name="email" class="full-form" placeholder="البريد الإلكتروني" />
                                    </div>
                                    <div class="row-form req">
                                        <input type="password" name="cpassword" class="full-form" 
                                        placeholder=" تأكيد كلمة المرور" />
                                    </div>
                                </div>
                            </div>
@if(count($countries)>0)
                            <div class="row-form req">
                                <span>البلد</span>
                                <select name="" class="full-form">
                                <option value="">اختر الدوله </option>
                                @foreach($countries as $c)
                                    
                                    <option value="{{$c->code}}">{{$c->name}}</option>
                                    
                                @endforeach
                                </select>
                            </div>
@endif
                            <div class="row-form req">
                                <input type="text" name="phone" class="full-form" placeholder="الجوال" />
                            </div>
                            <div class="row-form req">
                                <input type="text" name="city" class="full-form" placeholder="المدينة" />
                            </div>
                            <div class="row-form req">
                                <input type="text" name="address" class="full-form" placeholder="العنوان" />
                            </div>
                            <div class="row-form">
                                <label>
                                    <input type="checkbox" name="agree" />
                                    <span>أوافق على الشروط والأحكام</span>
                                </label>
                            </div>


                            <div class="row-form but-holder">
                                <button type="submit" class="sub-b">تسجيل</button>
                            </div>
                        </form>
                    </div>
                </div><!--right-->
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <h2 class="headline2"> الدخول </h2>
                    <div class="forms">
                        <form  action="{{url('auth/login')}}" method="post">
                        {{ csrf_field() }}
                            <div class="row-form">
                                <input type="email"  name="email" class="full-form" placeholder=" ادخل البريد الالكترونى " />
                            </div>
                            <div class="row-form">
                                <input type="password"  name="password" class="full-form" placeholder="كلمة المرور" />
                            </div>
                            <div class="row-form">
                                <label>
                                    <input type="checkbox" name="remmeber" />
                                    <span>تذكرني</span>
                                </label>
                            </div>
                            <div class="row-form but-holder">
                                <button type="submit" class="sub-b">دخول</button>
                            </div>
                        </form>
                    </div>
                </div><!--left-->
            </div>
        </div>
    </div>

    <hr />

         <!--<div class="orders">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="headline2 border-b"> مشترياتك </h2>

                    <div class="details">
                        <div class="de-right">المشتريات</div>
                        <div class="de-left">3</div>
                    </div>
                    <div class="details">
                        <div class="de-right">قيمة الشحن</div>
                        <div class="de-left">00.00 ريال</div>
                    </div>
                    <div class="details">
                        <div class="de-right">مصاريف إضافية</div>
                        <div class="de-left">00.00 ريال</div>
                    </div>
                    <div class="details">
                        <div class="de-right"><b>إجمالي المشتريات</b></div>
                        <div class="de-left"><span>897.00</span> ريال</div>
                    </div>
                    <br />
                    <br />
                    <h2 class="headline2 border-b"> طريقة الدفع </h2>
                    <div class="row-form">
                        <label>
                            <input type="radio" name="" />
                            <span>دفع فيزا كارت</span>
                        </label>
                    </div>
                    <div class="row-form">
                        <label>
                            <input type="radio" name="" />
                            <span>الدفع عند التسليم</span>
                        </label>
                    </div>
                    <div class="row-form">
                        <label>
                            <input type="radio" name="" />
                            <span>باي بال
                                <a href="#">
                                    ما هو باي بال؟ </a></span>
                                </label>
                            </div>
                            <div class="row-form but-holder text-right">
                                <button type="submit" class="sub-b2">تنفيذ</button>
                            </div>            </div>
                        </div>
                    </div>
                </div>
 -->


                <div class="small-imgs">
                 @include('site.layouts.partials.tradmark')
                </div>
@endsection
