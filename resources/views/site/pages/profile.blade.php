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



            <div class="col-xs-12 col-md-9 col-lg-9">
                <div class="forms">
                    <form action="" method="post">
                        <div class="row-form">
                            <textarea class="full-form" placeholder="الملف الشخصي" style="height:200px;"></textarea>
                        </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-6 rmb20">
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="محمد أحمد عبدالله" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="السعودية" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="الرياض" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="فيسبوك" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="تويتر" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="لينكدان" />
                                        <a href="#">تعديل</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 rmb20">
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="name@mail.com" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="0096650123456789" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="ذكر" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="جوجل بلس" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form">
                                        <input type="text" class="full-form" placeholder="سكايب" />
                                        <a href="#">تعديل</a>
                                    </div>
                                    <div class="row-form but-holder">
                                        <button type="submit" class="sub-b">دخول</button>
                                    </div>
                                </div>
                            </div>

                    </form>
                </div>


            </div><!--right-->
            <div class="col-xs-12 col-md-6 col-lg-3 text-center">

                <div class="avatar">
                    <img src="{{ asset('assets/site/imgs/user-info.png') }}" alt="u" />
                    <a href="#"> <i class="fa fa-camera"></i> </a>
                </div>

            </div><!--left-->



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
