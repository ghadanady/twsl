@extends('site.layouts.master')  
@section('title')
Profile
@endsection 

@section('page-title')
    <li>
        <a href="{{url('/')}}">
            <i class="fa fa-home"></i>home   
        </a>
    </li>  
    <li class="active">Profile</li>
@endsection 
@section('content')    
    <div class="page-content">
        <div class="container-fluid">                        
            <div class="row">
                <div class="col-sm-9">
                    <div class="top-box">
                        <h3 class="box-title">account information</h3>
                    </div><!--End top-box-->
                    <div class="profile-content">
                        <form  role="form" class="ajax-form" false;" action="{{route('site.edit.profile')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="awner-name">My Last Name</label>
                                    <input id="awner-name" class="form-control" type="text" 
                                    name="l_name" 
                                    value="{{Auth()->guard('members')->user()->l_name}}">
                                </div><!--End col-md-6-->
                                <div class="col-md-6 form-group">
                                    <label for="awner-name">My First Name</label>
                                    <input id="awner-name" class="form-control" type="text" 
                                    name="f_name" 
                                    value="{{Auth()->guard('members')->user()->f_name}}">
                                </div><!--End col-md-6-->
                                <div class="col-md-6 form-group">
                                    <label for="awner-email">My Email</label>
                                    <input id="awner-email" class="form-control" type="email" 
                                    name="email" value="{{Auth()->guard('members')->user()->email}}">
                                </div><!--End col-md-6-->
                                 <div class="col-md-6 form-group">
                                    <label for="awner-phone">My Phone</label>
                                    <input id="awner-phone" class="form-control" type="text" 
                                    name="phone" value="{{Auth()->guard('members')->user()->phone}}">
                                </div><!--End col-md-6-->
                                <div class="col-md-6 form-group">
                                    <label for="awner-country">My Address</label>
                                    <input id="awner-country" class="form-control" type="text"
                                    name="address" 
                                    value="{{Auth()->guard('members')->user()->address}}">
                                </div><!--End col-md-6-->
                                <div class="col-md-6 form-group">
                                    <label for="awner-country">My facebook</label>
                                    <input id="awner-facebook" class="form-control" type="text" placeholder="enter your facebook" name="facebook"
                                    value="{{Auth()->guard('members')->user()->facebook}}">
                                </div><!--End col-md-6-->
                                <div class="col-md-6 form-group">
                                    <label for="awner-country">My twitter</label>
                                    <input id="awner-twitter" class="form-control" type="text" placeholder="enter your twitter" name="twitter"
                                    value="{{Auth()->guard('members')->user()->twitter}}">
                                </div><!--End col-md-6-->
                                <div class="col-md-6 form-group">
                                    <label for="awner-google">My google plus</label>
                                    <input id="awner-google" class="form-control" type="text" placeholder="enter your google plus" name="google"
                                    value="{{Auth()->guard('members')->user()->google}}">
                                </div><!--End col-md-6-->
                                <div class="col-md-12 form-group quality">
                                    <label for="awner-info">My information</label>
                                    <textarea id="awner-info" class="form-control" type="text" rows="6" name="information">{{Auth()->guard('members')->user()->information}}</textarea>
                                </div><!--End col-md-12--> 
                            </div><!--End row-->
                            <button type="submit" class="ajax-submit custom-btn">Edit Information</button>
                        </form>
                    </div><!--End Profile-content-->
                </div><!--End Col-sm-9-->
                <div class="col-sm-3">
                    <ul class="account-sidebar">
                        <li class="account-img">
                        <div class="box-body box-profile file-box">
                            <img  name="image" style="cursor:pointer;" class="profile-user-img file-btn img-responsive img-circle" src="{{url('storage/uploads/images/avatars/'.Auth()->guard('members')->user()->image)}}"  alt="User profile picture">
                            <input type="file"  style="visibility: hidden;" name="image">
                        </div>    
                        </li><!--End account-img-->
                        <li class="active">
                            <a href="{{url('/profile')}}">
                                <i class="fa fa-user"></i>
                                Account Information
                            </a>
                        </li>
                        <li>
                            <a href="profile-items.html">
                                <i class="fa fa-pencil-square-o"></i>
                                My Items
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html">
                                <i class="fa fa-heart"></i>
                                My Wishlist
                            </a>
                        </li>
                    </ul><!--End account-sidebar-->
                </div><!--End Col-sm-3-->
            </div><!--End Row-->
        </div><!--End container-fluid-->
    </div><!--End page-content-->
@endsection 
    