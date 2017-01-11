@extends('site.layouts.base.master')

@section('title')
{{$product->name}}
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

                                    @foreach ($product->getImages() as $img)
                                    <div class="larg-img">
                                        <img src="{{ $img->url }}" alt="l" />
                                    </div>
                                    @endforeach
                                    

                                </div>
                                <div class="owl-carousel thumbs">
                                   

                                     @foreach ($product->getImages() as $img)
                                    <div class="sma-img">
                                        <img src="{{ $img->url }}" alt="l" />
                                    </div>
                                    @endforeach
                                    

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="pro-title-in">
                              {{$product->name}}
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
                               {!!$product->desc!!}
                            </p>
                            @if($product->discount==0)
                            <div class="price new">
                                <strong>{{$product->price}}</strong>
                                <span>ريال</span>
                            </div>
                            @else
                             <div class="price new">
                                <strong>{{$product->price-($product->price*$product->discount)/100}}</strong>
                                <span>ريال</span>
                            </div>
                            <div class="price old">
                                <strong>{{$product->price}}</strong>
                                <span>ريال</span>
                            </div>
                            @endif

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
                    @if(count($comments)>0)
                    @foreach($comments as $c)
                    @if(!$loop->last)
                        <div class="comment-it" data-last="{{($loop->last)}}">
                            <div class="comment-hed">
                                <span class="scax">{{$c->name}}</span>
                                <span>1/12/2016</span>
                            </div>
                            <div class="comment-text">
                                هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّ
                            </div>
                        </div>
                        @else
                        <div class="comment-it_last" data-last="{{($loop->last)}}">
                            <div class="comment-hed">
                                <span class="scax">{{$c->name}}</span>
                                <span>{{$c->created_at->diffForHumans()}}</span>
                            </div>
                            <div class="comment-text">
                            {{$c->comment}}
                            </div>
                        </div>
                        @endif

                        @endforeach
                        @else
                        <div class="alert alert-info"> لم يتم اضافة تعليقات كن انت أول من يعلق</div>
                        @endif
                       

                    </div>
                    <h2 class="headline2"> إضافة تعليق </h2>
                    <div class="errors">

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

                    </div>
                    <div class="forms">
                        <form action="{{url('product/addComment')}}" method="post" >
                        {{ csrf_field() }}
                            <div class="row-form">
                                <input type="text"  name="name" class="full-form" placeholder="الإسم" />
                                 <input type="hidden"  name="product_id" value="{{$product->id}}" />
                            </div>
                            <div class="row-form">
                                <input type="email"  name="email" class="full-form" placeholder="البريد الإلكتروني" />
                            </div>
                            <div class="row-form">
                                <textarea class="full-form"  name="comment"placeholder="التعليق"></textarea>
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
 @if(count($related_products)>0)
<div class="related">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="headline2"> منتجات ذات صلة </h2>
                <div class="owl-carousel carousel2">
                
                    @foreach($related_products as $p)

                    <div class="related-p">
                        <div class="pro-s">
                            <div class="p-img-holder">
                                <img src="{{ asset('assets/site/imgs/prod-img.png') }}" alt="pro" />
                                <span class="pro-shadow"></span>
                                <span class="prod-info">
                                @if($p->discount!=0)

                                <b>{{$p->price-($p->price*$p->discount)/100}}</b>
                                @else

                                <b> {{$p->price}}</b>
                                @endif
                                    ريال
                                </span>
                                <a href="#">
                                    <hr />
                                    <i class="fa fa-shopping-bag"></i>
                                    <span>{{$p->name}}</span>
                                </a>
                            </div>
                            <a class="prod-go text-center" href="#">{{$p->name}}</a>
                        </div>
                    </div>
                 

                    @endforeach
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endif





<div class="small-imgs">
      @include('site.layouts.partials.tradmark')
</div>

@endsection

