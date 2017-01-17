
<div class="bar">
    <div class="container">
        <div class="row">
            @if(!Auth::guard('members')->check())
                <div class="col-xs-12 col-md-6 rmb15 text-right">
                    <span class="welcome-text">
                        مرحباً بكم في متجرنا يمكنكم <a href="{{url('auth')}}">التسجيل</a> مجاناً
                    </span>
                </div>
            @else
                <div class="col-xs-12 col-md-6 rmb15 text-right">
                    <span class="welcome-text">
<<<<<<< HEAD
                    
                         
                                 
=======


                        مرحبا بك  <a href="{{url('profile/')}}">{{Auth::guard('members')->user()->f_name }}</a>
                        <a href="{{url('auth/logout')}}">تسجيل خروج </a>
>>>>>>> c378f093ccdfd41638233b1f8f037a0146a3bc4d
                    </span>
                </div>

            @endif
            <div class="col-xs-12 col-md-6 rmb15 text-left">
                <div class="top-contacts">
                    <span> <i class="fa fa-envelope"></i> info@sitename.com </span>
                    <span> <i class="fa fa-phone"></i> 096650123456789 </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="act-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 rmb15 text-right">
                <a class="logo" href="#">
                    <img src="{{ asset('assets/site/imgs/logo.png') }}" alt="logo" />
                </a>
            </div>
            <div class="col-xs-12 col-md-8 rmb15 text-left">
                <div class="top-search">
                    <select name="" class="s-select">
                        <option value="">جميع الأقسام</option>
                        <option value="">جميع الأقسام</option>
                        <option value="">جميع الأقسام</option>
                        <option value="">جميع الأقسام</option>
                        <option value="">جميع الأقسام</option>
                        <option value="">جميع الأقسام</option>
                    </select>
                    <input type="text" name="s" class="s-text" placeholder="أدخل كلمة البحث هنا .." />
                    <button type="submit" class="s-button"> <i class="fa fa-search"></i> </button>
                </div>
            </div>
        </div>
    </div>
</div>
