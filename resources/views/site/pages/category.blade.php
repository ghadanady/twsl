@extends('site.layouts.base.master')

@section('title')
    {{$category->name}}
@endsection
@section('content')
    <div class="inner-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-9">

                    <div class="sec-img">
                        <img src="{{url('storage/uploads/images/category')}}/{{$category->img}}" alt="sec" />
                    </div>
                    <div class="sec-des">
                        <h2>{{$category->name}}</h2>
                        @if($category->parent_id==0)
                            <span>القسم يحتوى على أقسام فرعية </span>
                            <span>يمكنكم تصفح كل قسم على حدا</span>
                        @endif
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
                            @if(count($products)>0)
                                @foreach($products as $p)

                                    <div class="col-xs-12 col-md-6 col-lg-4">

                                        <div class="prod-item">
                                            @if($p['discount']!=0)
                                                <span class="price">
                                                    خصم  {{$p['discount']}} <br /> ريال
                                                </span>

                                            @endif
                                            <span class="price">
                                                    {{$p['price']}} <br /> ريال
                                                </span>

                                            @php
                                            $imgs = $p->getImages();
                                            @endphp

                                            @if($imgs->isEmpty())
                                                <img src="{{url('storage/uploads/images/category/p_default.png')}}" alt="c" />
                                            @else
                                                <img src="{{ $imgs->first()->url }}" alt="mob" />
                                            @endif

                                            <a href="{{$p->getUrl()}}">
                                                <h2 class="prod-title">
                                                    {{$p['name']}}
                                                    {{$p['price']}}
                                                </h2>
                                            </a>
                                            <div class="rating">
                                                <span class="gold"> <i class="fa fa-star"></i> </span>
                                                <span class="gold"> <i class="fa fa-star"></i> </span>
                                                <span class="gold"> <i class="fa fa-star"></i> </span>
                                                <span class="gold"> <i class="fa fa-star"></i> </span>
                                                <span class="gray"> <i class="fa fa-star"></i> </span>
                                            </div>
                                            <div class="prod-buts">
                                                <button type="button" class="add-cart cart-btn" data-quantity="1" data-url="{{ $p->getCartUrl('add') }}"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                                                <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                                            </div>
                                        </div>

                                    </div>

                                @endforeach
                            @else
                                <div class='alert alert-info'> لايوجد منتجات بهذا التصنيف</div>
                            @endif
                            <!-- // -->
                        </div>
                    </div>

                    @if (!$products->isEmpty())
                        <div class="hr-row">
                            <div class="hr-right">
                                {{ $products->links() }}
                            </div>
                        </div>
                    @endif
                    <!-- row -->
                </div>
                <!--right-->
                <div class="col-xs-12 col-md-6 col-lg-3">

                    <div class="left-borderd">

                        
                        @if($category->parent_id==0)
                            <h2>الاقسام الفرعيه </h2>
                        @else
                            <h2>اقسام مشابهه </h2>
                        @endif

                        <ul class="cats">

                            @foreach($sub_categories  as $sub)
                                <li>
                                    <a href=" {{url('category/filter/'.$sub['id'])}}"> 
                                    <i class="fa fa-angle-double-left"></i>
                                        {{$sub['name']}}
                                        </a>

                                    </li>
                                @endforeach
                            </ul>
                        <div class="filter" style="direction: rtl">
                            <div class="container-fluid">
                                <div class="row">
                                <form action="{{url('category/filter/'.$category->id)}}" id='filterSubmit'>
                                    
                               
                                    <div class="col-md-12">
                                        <div id="accordion" class="panel panel-primary behclick-panel">
                                            
                                            <div class="panel-body" >
                                                <div class="panel-heading " >
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" href="#collapse0">
                                                            <i class="indicator fa fa-caret-down" aria-hidden="true"></i> السعر
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse0" class="panel-collapse collapse in" >
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <div class="checkbox">
                                                        <label>من </label>
                                                    <input  name="min"  class="form-control" type="text" value="">  
                                                                
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="checkbox" >
                                                                <label> ألى</label> 
                                                            <input  name="max" type="text"   class="form-control" value="">
                                                                    
                                                                
                                                            </div>
                                                        </li>
                                                       
                                                         </ul>
                                                </div>

                                                <div class="panel-heading " >
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" href="#collapse1">
                                                            <i class="indicator fa fa-caret-down" aria-hidden="true"></i> التاريخ 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse in" >
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <div class="checkbox">
                                                                <label>
                                                             <input  name="order" type="radio" value="old">
                                                                    الاقدم 
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="checkbox" >
                                                                <label>
                                                                    <input  name="order" type="radio" value="new">
                                                                    الاحدث
                                                                </label>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                               
                                               
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                </div>
                            </div>
                        </div>




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
                @include('site.layouts.partials.tradmark')
            </div>
        @endsection
        <script type="text/javascript">
            

        </script>
