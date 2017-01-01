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
                            <span>{{$settings->site_address}}</span>
                        </li>
                        <li>
                            <i class="fa fa-whatsapp"></i>
                            <span>{{$settings->site_phone1}}</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <span>{{$settings->site_email}}</span>
                        </li>
                        <li>
                            <i class="fa fa-whatsapp"></i>
                            <span>{{$settings->site_phone2}}</span>
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
                            <a href="{{$settings->facebook}}">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$settings->twitter}}">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$settings->instagram}}">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$settings->youtube}}">
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
                    <img src="{{asset('assets/site/images/footer.png')}}">
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