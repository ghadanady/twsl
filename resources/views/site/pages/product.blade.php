@extends('site.layouts.base.master')

@section('title')

@endsection
@section('content')
<div class="inner-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9 col-lg-9">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 rmb20">
                            <div class="pro-imgs-slider">
                                <div class="owl-carousel big-images">
                                    <div class="larg-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                    <div class="larg-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                    <div class="larg-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                    <div class="larg-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                    <div class="larg-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                </div>
                                <div class="owl-carousel thumbs">
                                    <div class="sma-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                    <div class="sma-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                    <div class="sma-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                    <div class="sma-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                    <div class="sma-img">
                                        <img src="{{ asset('assets/site/imgs/laptop.png') }}" alt="l" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="pro-title-in">
                                عنوان وإسم المنتج
                            </div>
                            <div class="reting text-right">
                                <span class="fa fa-star gold"></span>
                                <span class="fa fa-star gold"></span>
                                <span class="fa fa-star gold"></span>
                                <span class="fa fa-star gold"></span>
                                <span class="fa fa-star gray"></span>
                            </div>
                            <div class="red-t">التفاصيل</div>
                            <p class="in-o-det">
                                هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم
                            </p>
                            <div class="price new">
                                <strong>4500</strong>
                                <span>ريال</span>
                            </div>
                            <div class="price old">
                                <strong>5500</strong>
                                <span>ريال</span>
                            </div>
                            <div class="quantity">
                                <div class="sp-quantity">
                                    <div class="sp-minus fff asdasxx"><a class="ddd" data-multi="-1">-</a></div>
                                    <div class="sp-input">
                                        <input type="text" class="quntity-input" value="1" />
                                    </div>
                                    <div class="sp-plus fff asdasxx"><a class="ddd" data-multi="1">+</a></div>
                                </div>
                                <button type="button" class="add-cart">
                                    أضف إلى السلة
                                </button>
                            </div>
                        </div>
                    </div>


                    <h2 class="headline2"> التعليقات </h2>
                    <div class="comments">
                        <div class="comment-it">
                            <div class="comment-hed">
                                <span class="scax">محمد أحمد</span>
                                <span>1/12/2016</span>
                            </div>
                            <div class="comment-text">
                                هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّ
                            </div>
                        </div>
                        <div class="comment-it">
                            <div class="comment-hed">
                                <span class="scax">محمد أحمد</span>
                                <span>1/12/2016</span>
                            </div>
                            <div class="comment-text">
                                هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّ
                            </div>
                        </div>
                    </div>
                    <h2 class="headline2"> إضافة تعليق </h2>
                    <div class="forms">
                        <form action="" method="post">
                            <div class="row-form">
                                <input type="text" class="full-form" placeholder="الإسم" />
                            </div>
                            <div class="row-form">
                                <input type="email" class="full-form" placeholder="البريد الإلكتروني" />
                            </div>
                            <div class="row-form">
                                <textarea class="full-form" placeholder="التعليق"></textarea>
                            </div>
                            <div class="row-form but-holder">
                                <button type="submit" class="sub-b">إرسال</button>
                            </div>
                        </form>
                    </div>

            </div><!--right-->
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="left-ads">
                    <a href="#">
                        <img src="{{ asset('assets/site/imgs/ad-laptop.png') }}" alt="s" />
                    </a>
                </div>
            </div><!--left-->

        </div>
    </div>
</div>

<div class="related">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="headline2"> منتجات ذات صلة </h2>
                <div class="owl-carousel carousel2">
                    <div class="related-p">
                        <div class="pro-s">
                            <div class="p-img-holder">
                                <img src="{{ asset('assets/site/imgs/prod-img.png') }}" alt="pro" />
                                <span class="pro-shadow"></span>
                                <span class="prod-info">
                                    <b>299.00</b>
                                    ريال
                                </span>
                                <a href="#">
                                    <hr />
                                    <i class="fa fa-shopping-bag"></i>
                                    <span>أضف إلى السلة</span>
                                </a>
                            </div>
                            <a class="prod-go text-center" href="#">إسم المنتج يظهر هنا</a>
                        </div>
                    </div>
                    <div class="related-p">
                        <div class="pro-s">
                            <div class="p-img-holder">
                                <img src="{{ asset('assets/site/imgs/prod-img.png') }}" alt="pro" />
                                <span class="pro-shadow"></span>
                                <span class="prod-info">
                                    <b>299.00</b>
                                    ريال
                                </span>
                                <a href="#">
                                    <hr />
                                    <i class="fa fa-shopping-bag"></i>
                                    <span>أضف إلى السلة</span>
                                </a>
                            </div>
                            <a class="prod-go text-center" href="#">إسم المنتج يظهر هنا</a>
                        </div>
                    </div>
                    <div class="related-p">
                        <div class="pro-s">
                            <div class="p-img-holder">
                                <img src="{{ asset('assets/site/imgs/prod-img.png') }}" alt="pro" />
                                <span class="pro-shadow"></span>
                                <span class="prod-info">
                                    <b>299.00</b>
                                    ريال
                                </span>
                                <a href="#">
                                    <hr />
                                    <i class="fa fa-shopping-bag"></i>
                                    <span>أضف إلى السلة</span>
                                </a>
                            </div>
                            <a class="prod-go text-center" href="#">إسم المنتج يظهر هنا</a>
                        </div>
                    </div>
                    <div class="related-p">
                        <div class="pro-s">
                            <div class="p-img-holder">
                                <img src="{{ asset('assets/site/imgs/prod-img.png') }}" alt="pro" />
                                <span class="pro-shadow"></span>
                                <span class="prod-info">
                                    <b>299.00</b>
                                    ريال
                                </span>
                                <a href="#">
                                    <hr />
                                    <i class="fa fa-shopping-bag"></i>
                                    <span>أضف إلى السلة</span>
                                </a>
                            </div>
                            <a class="prod-go text-center" href="#">إسم المنتج يظهر هنا</a>
                        </div>
                    </div>
                    <div class="related-p">
                        <div class="pro-s">
                            <div class="p-img-holder">
                                <img src="{{ asset('assets/site/imgs/prod-img.png') }}" alt="pro" />
                                <span class="pro-shadow"></span>
                                <span class="prod-info">
                                    <b>299.00</b>
                                    ريال
                                </span>
                                <a href="#">
                                    <hr />
                                    <i class="fa fa-shopping-bag"></i>
                                    <span>أضف إلى السلة</span>
                                </a>
                            </div>
                            <a class="prod-go text-center" href="#">إسم المنتج يظهر هنا</a>
                        </div>
                    </div>
                </div>
            </div>
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
