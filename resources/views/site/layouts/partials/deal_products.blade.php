@if(count($hot_deals)>0)
 @foreach($hot_deals as $p)
 <div class="pro-item">
     <div class="pro-s">
         <div class="p-img-holder">

              @php
                 $imgs = $p->getImages();
                 @endphp

                 @if($imgs->isEmpty())
                     <img src="{{url('storage/uploads/images/category/p_default.png')}}" alt="c" />
                 @else
                     <img src="{{ $imgs->first()->url }}" alt="mob" />
                 @endif

             <span class="pro-shadow"></span>
             <span class="prod-info">
               @if($p->hasOffer() )
                 <b>{{$p->getDiscount()}}</b>
                 ريال
             </span>
              

             @else
             <div class="price new">
                 <strong>{{$p->price}}</strong>
                 <span>ريال</span>
             </div>
             @endif


             <a href="">
                 <hr />
                 <i class="fa fa-shopping-bag"></i>
                 <span>أضف إلى السلة</span>
             </a>
         </div>
         <a class="prod-go" href="{{$p->getUrl()}}">{{$p->name}}</a>
     </div>
 </div>
 @endforeach

 @else

 <div class="alert alert- info"> dfdfd</div>
 
 @endif
