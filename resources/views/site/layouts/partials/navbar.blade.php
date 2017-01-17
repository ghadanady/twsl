<div class="uper-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 text-right rmb20">
                <div class="menu-toggle">
                    <i class="fa fa-bars"></i>
                    <span>أقسام الموقع</span>
                    <i class="fa fa-angle-down"></i>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 text-left rmb20">
                <div class="shopping-cart">
                    <div class="cart-open">
                        ( <span> 0 </span> )
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div id="cart-content">
                        محتوى القائمة
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mainer-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                @if(count($categories)>0)
                    <ul class="up-menu">
                        @foreach($categories as $c)
                            <li class="up-menu-item">

                                <a href="{{url('category/filter/'.$c['cat']->id)}}" >
                                    {{$c['cat']->name}}
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                @if(count($c['sub'])>0)
                                    <ul class="up-menu-child">
                                        @foreach($c['sub'] as $sub)
                                            <li>
                                                <a href="{{url('category/filter/'.$sub->id)}}">
                                                    {{$sub['name']}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
