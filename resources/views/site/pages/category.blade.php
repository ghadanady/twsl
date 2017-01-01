@extends('site.layouts.base.master')

@section('title')

@endsection
@section('content')
<div class="inner-container">
    <div class="container">
<div class="row">
    <div class="col-xs-12 col-md-9 col-lg-9">


        <div class="sec-img">
            <img src="{{ asset('assets/site/imgs/sec-img.png') }}" alt="sec" />
        </div>
        <div class="sec-des">
            <h2>إلكترونيات</h2>
            <span>القسم يحتوى على أقسام فرعية </span>
            <span>يمكنكم تصفح كل قسم على حدا</span>
        </div>

        <div class="hr-row">
            <div class="hr-right">
                <select name="s" class="in-select">
                    <option value="">إستعرض بواسطة : التقليدي</option>
                    <option value="">إستعرض بواسطة : التقليدي</option>
                    <option value="">إستعرض بواسطة : التقليدي</option>
                    <option value="">إستعرض بواسطة : التقليدي</option>
                    <option value="">إستعرض بواسطة : التقليدي</option>
                </select>
                <select name="s" class="in-select">
                    <option value="">إعرض : 10 </option>
                    <option value="">إعرض : 10 </option>
                    <option value="">إعرض : 10 </option>
                    <option value="">إعرض : 10 </option>
                    <option value="">إعرض : 10 </option>
                </select>
            </div>
            <div class="hr-left">
                <div class="inline-icons">
                    <button type="button">
                        <i class="fa fa-th-large"></i>
                    </button>
                    <button type="button">
                        <i class="fa fa-th-list"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- row -->

        <div class="products-cc">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="prod-item">
                        <span class="price">
                                    455 <br /> ريال
                                </span>
                        <img src="{{ asset('assets/site/imgs/mob.png') }}" alt="mob" />
                        <h2 class="prod-title"> إسم المنتج سوف يظهر هنا تفصيلياً </h2>
                        <div class="rating">
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gold"> <i class="fa fa-star"></i> </span>
                            <span class="gray"> <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="prod-buts">
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                </div>
                <!-- // -->
            </div>
        </div>

        <div class="hr-row">
            <div class="hr-right">
                <div class="pagnation">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#"><i class="fa fa-angle-left"></i></a>
                </div>
            </div>
            <div class="hr-left">
                <div class="left-text">
                    الصفحات من 1 : 20
                </div>
            </div>
        </div>
        <!-- row -->


    </div>
    <!--right-->
    <div class="col-xs-12 col-md-6 col-lg-3">

        <div class="left-borderd">

            <h2>السعر</h2>
            <div class="slider"></div>

            <h2>التصنيفات</h2>
            <ul class="cats">
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> عنوان القسم الفرعي ( <span>0000</span> ) </a>
                </li>
            </ul>


            <h2>الون</h2>
            <ul class="cats">
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> لون <span>1</span> </a>
                </li>
            </ul>



            <h2>الشركة المصنعة</h2>
            <ul class="cats">
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-angle-double-left"></i> الشركة المصنعة <span>1</span> </a>
                </li>
            </ul>




            <div class="left-ads">
                <a href="#">
                    <img src="{{ asset('assets/site/imgs/ads-left.png') }}" alt="s" />
                </a>
            </div>

        </div>


    </div>
    <!--left-->
</div>    </div>
</div>

<div class="small-imgs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
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
