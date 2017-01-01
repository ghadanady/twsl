@foreach($menus as $menu)
    @if($menu->isShape(1))
    @php
    $details=$menu->translated();
    @endphp
        <li>
            <a href="#">
                {{$details->name}}
            </a>
            <ul class="main-drop">
            @foreach($menu->categories as $category)
                @php
                    $cat_details=$category->translated(); 
                @endphp
                <li>
                    <a href="{{ $category->getUrl() }}">
                      {{$cat_details->name}}
                    </a>
                    @if($category->subCategories->count())
                    <ul class="main-drop">
                        @foreach($category->subCategories as $sub)
                        @php
                            $sub_details=$sub->translated(); 
                        @endphp
                        <li>
                            <a href="{{ $sub->getUrl() }}"">
                            {{$sub_details->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul><!--End sub-menu-->
                    @endif
                </li><!--End dropdown-submenu-->
            @endforeach    
            </ul>
        </li><!--End Menu Item-->
    @endif
  
@endforeach


