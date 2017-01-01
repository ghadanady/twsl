@extends('site.layouts.base.master')

@section('title')

@endsection
@section('content')
    <div class="inner-container">
        <div class="container">
            <div class="row">

                <div class="col-xs-12">
                    <h2 class="headline2"> إضافة تعليق </h2>
                    <div class="notic">
                        مرحباً أنت لم تقم بتسجيل الدخول يمكنك
                        <a href="#">الدخول </a>
                        او
                        <a href="#">تسجيل عضوية جديدة</a>
                    </div>

                </div>

                <div class="col-xs-12 col-md-9 col-lg-9">
                    <h2 class="headline2"> التسجيل </h2>
                    <div class="forms">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="row-form req">
                                        <input type="text" class="full-form" placeholder="الإسم الأول" />
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="الوظيفة" />
                                    </div>
                                    <div class="row-form req">
                                        <input type="text" class="full-form" placeholder="الجوال" />
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="row-form req">
                                        <input type="text" class="full-form" placeholder="الإسم الأخير" />
                                    </div>
                                    <div class="row-form req">
                                        <input type="text" class="full-form" placeholder="البريد الإلكتروني" />
                                    </div>
                                    <div class="row-form req">
                                        <input type="text" class="full-form" placeholder="كلمة المرور" />
                                    </div>
                                </div>
                            </div>

                            <div class="row-form req">
                                <span>البلد</span>
                                <select name="" class="full-form">
                                    <option value="">السعودية</option>
                                    <option value="">السعودية</option>
                                    <option value="">السعودية</option>
                                    <option value="">السعودية</option>
                                    <option value="">السعودية</option>
                                    <option value="">السعودية</option>
                                </select>
                            </div>
                            <div class="row-form req">
                                <input type="text" class="full-form" placeholder="المدينة" />
                            </div>
                            <div class="row-form req">
                                <input type="text" class="full-form" placeholder="العنوان" />
                            </div>
                            <div class="row-form">
                                <label>
                                    <input type="checkbox" name="" />
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
                        <form action="" method="post">
                            <div class="row-form">
                                <input type="text" class="full-form" placeholder="إسم المستخدم" />
                            </div>
                            <div class="row-form">
                                <input type="password" class="full-form" placeholder="كلمة المرور" />
                            </div>
                            <div class="row-form">
                                <label>
                                    <input type="checkbox" name="" />
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

    <div class="orders">
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



                <div class="small-imgs">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="headline2"> الماركات التجارية </h2>
                                <div class="owl-carousel carousel1">
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                    <div class="s-cmera">
                                        <img src="{{ asset('assets/site/imgs/camera.png') }}" alt="c" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
