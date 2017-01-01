@foreach($menus as $menu)
    @if($menu->isShape(2)) 
        @php
            $details = $menu->translated();
        @endphp
        <li class="active">
            <a href="#">
                {{$details->name}}
            </a> 

            <div class="main-drop full-mega">
            @foreach($menu->categories as $category)
            @php
                $cat_details = $category->translated();
            @endphp
                <div class="col-md-3">
                    <h3>{{$cat_details->name}}</h3>
                    @foreach($category->subCategories as $sub)
                    @php
                        $sub_details = $sub->translated();
                    @endphp
                        <a href="{{ $sub->getUrl() }}"">{{$sub_details->name}}</a>
                    @endforeach    
                </div><!--End col-md-3-->
            @endforeach    
            </div><!--End mega-menu-->
        </li><!--End Menu Item-->
    @endif
@endforeach        


               