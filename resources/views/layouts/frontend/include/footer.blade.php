<footer class="site-footer">
    <div class="container">
        <div class="row justify-content-between  section-padding">
             <div class=" col-xl-3 col-lg-4 col-sm-6 col-md-4">
                <div class="single-footer pb--40">
                    <div class="footer-title">
                        <h3 style="color:green;font-weight:bold;">About Us</h3>
                    </div>
                    <p style="text-align:justify;">
                        Founded in 2021, E-Pharmacy is Pakistan’s First Instant Health Care Solution. We don’t only connect a patient with best medical facility but also provides a valid and authentic information about healthcare facilities In Pakistan.
E-Pharmacy allows you to find best doctors around you and connects you via regular appointments. E-Pharmacy is also provide online medicine delivery at your door step.
E-Pharmacy is also providing best awareness disease articles to our customers that they can get more knowlege about diease and how to handle the stitatuion in that case.
                    </p>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-4 col-sm-6 col-md-4">
                <div class="single-footer pb--40">
                    <div class="footer-title">
                        <h3 style="color:green;font-weight:bold;">Stay Connected With Us</h3>
                    </div>
                    
                    <div class="footer-contact">
                        <p>
                            <span class="icon" style=" color:green; margin-right:10px; ">
                                <i class="fas fa-map-marker-alt"></i>
                            </span> 
                            <span class="label">Address:</span> <span class="text">{{ isset($settings) ? $settings->address ?? "" : "" }}</span></p>
                        <p>
                           <span class="icon" style=" color:green; margin-right:10px; ">
                              <i class="fas fa-mobile-alt"></i>
                            </span>  
                            <span class="label">Phone:</span> <span class="text">{{ isset($settings) ? $settings->phone ?? "" : "" }}</span></p>
                        <p>
                            <span class="icon" style=" color:green; margin-right:10px; ">
                                <i class="far fa-envelope"></i>
                            </span> 
                            <span class="label">Email:</span> <span class="text">{{ isset($settings) ? $settings->email ?? "" : "" }}</span></p>
                    </div>
                    <br />
                    <div class="social-block">
                    <ul class="social-list list-inline">
                        <li class="single-social facebook"><a href=""><i class="ion ion-social-facebook"></i></a>
                        </li>
                        <li class="single-social twitter"><a href=""><i class="ion ion-social-twitter"></i></a></li>
                        <li class="single-social google"><a href=""><i
                                    class="ion ion-social-googleplus-outline"></i></a></li>
                        <li class="single-social youtube"><a href=""><i class="ion ion-social-youtube"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>

           
            <div class=" col-xl-3 col-lg-4 col-sm-6 col-md-4">
                        <div class="single-footer pb--40">
                    <div class="footer-title">
                        <h3 style="color:green;font-weight:bold;">What You Can Do Now</h3>
                    </div>
                    <ul class="footer-list normal-list">
                        <li><a href="">Search Medicine</a></li>
                        <li><a href="">Order Medicine</a></li>
                        <li><a href="">Find A Dotor</a></li>
                        <li><a href="">Find A Pharmay</a></li>
                        <li><a href="">Get Knowledge About Disease</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">

            <a href="#" class="payment-block">
                <img src="image/icon/payment.png" alt="">
            </a>
            <p class="copyright-text">Copyright © 2021 <a href="#" class="author">E-Pharmacy And Online Medicine Delivery</a>. All Right Reserved.
                <br>
                Design By E-Pharmacy and Online Medicine Delivery</p>
        </div>
    </div>
</footer>

<!-- start bottom notification area -->
<div class="notification-area">
	<p>This is Test Notification</p>
</div>
<!-- end bottom notification area -->

