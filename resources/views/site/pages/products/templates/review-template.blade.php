@foreach($reviews as $r)
<div class="comments-wrap" id="review-template">
    <div class="comment" id="review_body">
        <div class="comment-img">
            <img src="{{url('storage/uploads/images/avatars/'.$r->member->image)}}">
        </div><!--End comment-img-->
        <div class="comment-cont">
            <div class="comment-title">
                review by
                <h3> {{$r->member->f_name}}</h3>
                <span>{{$r->created_at}}</span>
            </div><!--End comment-title-->
            <ul class="rating">
                
                @if($r->rate != null)
                    @for($i=1 ; $i<=5 ;$i++)
                        @if($i <= $r->rate)
                            <li class="active"></li>
                        @else
                            <li></li>
                        @endif
                    @endfor 
                @endif   
            </ul>

                @php
                    $review_details = $r->translated();
                @endphp
                <p>
                     {{$review_details->review}}
                </p>
        </div><!--End comment-cont-->
    </div><!--End comment-->
</div><!--End comments-wrap-->
@endforeach