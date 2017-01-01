<!DOCTYPE html>
<html>
   <head>
        <!-- Basic page needs
        ===========================-->
        <title>login-register</title>
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">        
        
        <!-- Mobile specific metas
        ===========================-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- Favicon
        ===========================-->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/site/images/fave.png')}}">
        
        <!-- Google Web Fonts 
        ===========================--> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
               
        
        <link rel="stylesheet" href="{{asset('assets/site/vendor/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/jquery-ui/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/owl-carousel/css/owl.theme.css')}}">
        
        <!-- Site Style
        ===========================-->
        <link rel="stylesheet" href="{{asset('assets/site/css/style-elements.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}">        
           
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
         @include('site.layouts.header')
           
            <div class="main" role="main">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>home   
                        </a>
                    </li>  
                    <li class="active">Login &amp; Register</li>
                </ul><!--End breadcrumb-->
                <div class="page-content">
                    <div class="container">                        
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="box-wrap brdr-rd-3">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="forget-pass-content">
                                                <div class="heading">
                                                    <i class="fa fa-smile-o"></i>
                                                    <p>enter your email to recovery your password ! </p>
                                                </div>
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="email address" class="form-control">
                                                    </div>
                                                        <button class="custom-btn">send</button>
                                                </form>
                                            </div><!--End forget-pass-->
                                        </div><!--End col-md-10-->
                                    </div><!--End row-->
                                </div><!--End box-wrap-->
                            </div><!--End col-md-8-->
                        </div><!--End Row-->  
                    </div><!--End container-fluid-->
                </div><!--End page-content-->
                <footer class="footer">
                    <div class="footer-widgets">
                        <div class="col-md-4">
                            <div class="widget">
                                <div class="widget-title">
                                    <h3>Contact Us</h3>
                                </div><!--End widget-title-->
                                <div class="widget-content">
                                    <ul class="contact-widget">
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span>tala elmenoufeya egypt</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-whatsapp"></i>
                                            <span>00201097556008</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <span>7ossamsh@gmail.com</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-whatsapp"></i>
                                            <span>00201097556008</span>
                                        </li>
                                    </ul><!--End contact-widget-->    
                                </div><!--End widget-content-->
                            </div><!--End widget-->
                        </div><!--End col-md-4-->
                        <div class="col-md-4">
                            <div class="widget">
                                <div class="widget-title">
                                    <h3>Connect With Us</h3>
                                </div><!--End widget-title-->
                                <div class="widget-content">
                                    <ul class="social-widget">
                                        <li>
                                            <a href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul><!--End social-widget-->    
                                </div><!--End widget-content-->
                            </div><!--End widget-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h3>Newsletter</h3>
                                </div><!--End widget-title-->
                                <div class="widget-content">
                                    <form class="form-icon">
                                        <input type="text" placeholder="Enter Your Email">
                                        <button type="submit">
                                            <i class="fa fa-envelope-o"></i>
                                        </button>
                                    </form><!--End form-icon-->
                                </div><!--End widget-content-->
                            </div><!--End widget-->
                        </div><!--End col-md-4-->
                        <div class="col-md-4">
                            <div class="widget">
                                <div class="widget-title">
                                    <img src="images/footer.png">
                                </div><!--End widget-title-->
                                <div class="widget-content">
                                    <ul class="tags tabel-tags map-widget">
                                        <li><a href="">home</a></li>
                                        <li><a href="">about us</a></li>
                                        <li><a href="">privacy</a></li>
                                        <li><a href="">faq</a></li>
                                        <li><a href="">terms</a></li>
                                        <li><a href="">blog</a></li>
                                        <li><a href="">term</a></li>
                                        <li><a href="">contact us</a></li>
                                    </ul>
                                </div><!--End widget-content-->
                            </div><!--End widget-->
                        </div><!--End col-md-4--> 
                    </div><!--End footer-widgets-->
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    made with 
                                    <i class="fa fa-heart"></i> 
                                    By Upureka
                                </div><!--End col-md-6-->
                                <div class="col-md-6 text-right">
                                    © 2016 iron
                                </div><!--End col-md-6-->
                            </div><!--End row-->
                        </div><!--End container-->
                        <div class="scroll-top">
                            <i class="fa fa-arrow-up"></i>
                        </div><!--End scroll-top-->
                    </div><!--End copyright-->
                </footer><!--End Footer-->            
            </div><!--End main-->
        </div><!--End Wrapper-->
        @include('site.layouts.footer')
    
    <!--Scripts Plugins-->
    <script src="{{asset('assets/site/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/site/vendor/countdown.js')}}"></script>
    <script src="{{asset('assets/site/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/site/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/site/vendor/jcarousellite.js')}}"></script>
    
    <script src="{{asset('assets/site/js/main.js')}}"></script>
    <script src="{{asset('assets/admin/process.js')}}"></script>
    </body>
</html>    