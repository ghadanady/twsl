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
                            {{$p['discount']}} <br /> ريال
                        </span>
                    @endif

                   @if(count($p->getImages())>0)
                        <img src="{{url('storage/uploads/images/category/p_default.png')}}" alt="c" />
                   @else
                       @foreach ($p->getImages() as $img)
                         <img src="{{$img->url()}}" alt="mob" />
                        @endforeach
                    @endif


                        <a href="{{url('product/'.$p['id'])}}">    
                        <h2 class="prod-title">
                         {{$p['name']}}
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
                            <button type="button" class="add-cart"> <i class="fa fa-shopping-cart"></i> أضف إلى السلة </button>
                            <button type="button" class="add-cart"> <i class="fa fa-television"></i></button>
                        </div>
                    </div>
                   
                </div>

            @endforeach

                 <div class="hr-row">
            <div class="hr-right">
                
                {{$products->links()}}
            </div>
          

        </div>
            @else
            <div class='alert alert-info'> لايوجد منتجات بهذا التصنيف</div>
            @endif
                <!-- // -->
               

              

         

            </div>
        </div>


        <!-- row -->


    </div>
    <!--right-->
    <div class="col-xs-12 col-md-6 col-lg-3">

        <div class="left-borderd">

            <h2>السعر</h2>
            <div class="slider"></div>
            @if($category->parent_id==0)
            <h2>الاقسام الفرعيه </h2>
            @else
             <h2>اقسام مشابهه </h2>
            @endif

            <ul class="cats">
                

               
               @foreach($sub_categories  as $sub)
                <li>
                    <a href="{{url('category/'.$sub['id'])}}""> <i class="fa fa-angle-double-left"></i> 
                    {{$sub['name']}}
                     ( <span>0000</span> ) </a>
                    
                </li>
                @endforeach
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
               
            </ul>



            <h2>الشركة المصنعة</h2>
            <ul class="cats">
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
     @include('site.layouts.partials.tradmark')
</div>
@endsection
