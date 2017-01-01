@extends('site.layouts.base.master')

@section('title')

@endsection
@section('content')
    <div class="inner-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="max-w-600">
                        <h2 class="headline2"> اتصل بنا </h2>
                        <div class="forms">
                            <form action="" method="post">
                                <div class="row-form">
                                    <input type="text" class="full-form" placeholder="الإسم" />
                                </div>
                                <div class="row-form">
                                    <input type="email" class="full-form" placeholder="البريد الإلكتروني" />
                                </div>
                                <div class="row-form">
                                    <input type="tel" class="full-form" placeholder="رقم الجوال" />
                                </div>
                                <div class="row-form">
                                    <textarea class="full-form" placeholder="نص الرسالة"></textarea>
                                </div>
                                <div class="row-form but-holder">
                                    <button type="submit" class="sub-b">إرسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!---->
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
