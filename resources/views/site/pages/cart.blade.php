@extends('site.layouts.base.master')

@section('title')

@endsection
@section('content')
    <div class="inner-container">
        <div class="container">
            <div class="row">

                <div class="col-xs-12">
                    <h2 class="headline"> سلة الشراء </h2>
                    <br />
                    <br />

                    <div class="contents">


                        <table class="table txd table-hover">
                            <thead>
                                <tr>
                                    <th> المنتج</th>
                                    <th>السعر</th>
                                    <th>الكمية</th>
                                    <th> الإجمالية</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td valign="middle"> <img src="{{ asset('assets/site/imgs/cart-item.png') }}" alt="2" /> </td>
                                    <td valign="middle"><b>299.00</b> ريال</td>
                                    <td valign="middle">
                                        <input type="number" class="smalin" value="1" /> </td>
                                    <td valign="middle"><b>2999.00</b> ريال</td>
                                    <td valign="middle">
                                        <a href="#" class="c-cart"> <i class="fa fa-close"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle"> <img src="{{ asset('assets/site/imgs/cart-item.png') }}" alt="2" /> </td>
                                    <td valign="middle"><b>299.00</b> ريال</td>
                                    <td valign="middle">
                                        <input type="number" class="smalin" value="1" /> </td>
                                    <td valign="middle"><b>2999.00</b> ريال</td>
                                    <td valign="middle">
                                        <a href="#" class="c-cart"> <i class="fa fa-close"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle"> <img src="{{ asset('assets/site/imgs/cart-item.png') }}" alt="2" /> </td>
                                    <td valign="middle"><b>299.00</b> ريال</td>
                                    <td valign="middle">
                                        <input type="number" class="smalin" value="1" /> </td>
                                    <td valign="middle"><b>2999.00</b> ريال</td>
                                    <td valign="middle">
                                        <a href="#" class="c-cart"> <i class="fa fa-close"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle"> <img src="{{ asset('assets/site/imgs/cart-item.png') }}" alt="2" /> </td>
                                    <td valign="middle"><b>299.00</b> ريال</td>
                                    <td valign="middle">
                                        <input type="number" class="smalin" value="1" /> </td>
                                    <td valign="middle"><b>2999.00</b> ريال</td>
                                    <td valign="middle">
                                        <a href="#" class="c-cart"> <i class="fa fa-close"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle"> <img src="{{ asset('assets/site/imgs/cart-item.png') }}" alt="2" /> </td>
                                    <td valign="middle"><b>299.00</b> ريال</td>
                                    <td valign="middle">
                                        <input type="number" class="smalin" value="1" /> </td>
                                    <td valign="middle"><b>2999.00</b> ريال</td>
                                    <td valign="middle">
                                        <a href="#" class="c-cart"> <i class="fa fa-close"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle"> <img src="{{ asset('assets/site/imgs/cart-item.png') }}" alt="2" /> </td>
                                    <td valign="middle"><b>299.00</b> ريال</td>
                                    <td valign="middle">
                                        <input type="number" class="smalin" value="1" /> </td>
                                    <td valign="middle"><b>2999.00</b> ريال</td>
                                    <td valign="middle">
                                        <a href="#" class="c-cart"> <i class="fa fa-close"></i> </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>



                        <br />
                        <br />


                        <div class="row-form but-holder text-right">
                            <button type="submit" class="sub-b2">تحديث السلة</button>
                        </div>


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

                        <div class="row-form but-holder text-right">
                            <button type="submit" class="sub-b2">الدفع</button>
                        </div>


                        <br />
                        <br />


                    </div>

                </div>

            </div>
        </div>
    </div>




    <div class="related">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="headline2"> انت مهتم بـ ... </h2>
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
