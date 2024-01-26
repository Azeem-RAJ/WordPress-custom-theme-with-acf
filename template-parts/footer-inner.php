<?php
    $theme_directory = get_template_directory_uri();
    $assets_url = get_template_directory_uri() . '/assets';

    
?>
<footer class="footer">
            <div class="container">
                <div class="company_footer">
                    <div class="company-logo">
                        <ul>
                            <li>
                                <img alt="" class="website-secure" src="<?php echo esc_url( $assets_url)?>/img/logo_new1.jpg">
                            </li> 
                         <li><img alt="" src="https://secure.trymetabolic.com/v1//assets/images/social-icons.jpg"></li>
                    <li><img class="ca" alt="" src="https://secure.trymetabolic.com/v1//assets/images/ca.png"></li>
                        </ul>
                    </div>
                    <div class="company_content">
                    <ul class="company_ul">
                        <li class="company_li">
                            <h1>Company Info</h1>
                        </li>
                        <li class="company_li">
                            <h5>Company Name: Pluzo LLC</h5>
                        </li>
                        <li class="company_li">
                            <h5>Company Address: 8 The Green STE A Dover, DE 19901, USA</h5>
                            </li>
                            <li class="company_li">
                            <h5>Support Number: <a href="tel:+1 302-310-4487">+1 302-310-4487</a></h5>
                            </li>
                            <li class="company_li">
                            <h5>Support Email:<a href="mailto:support@pluzoketo.com">support@pluzoketo.com</a></h5>
                            </li>
                    </ul>
                    </div>
                </div>
                <ul class="soc-list row">
                   
                </ul>

                <p> PluzoKeto + ACV Gummy is committed to maintaining the highest quality products and the utmost
                    integrity in business practices. All products sold on this website are certified by Good
                    Manufacturing Practices (GMP), which is the highest standard of testing in the supplement
                    industry.</p>
                <p>Notice: The products and information found on this site are not intended to replace professional
                    medical advice or treatment. These statements have not been evaluated by the Food and Drug
                    Administration. These products are not intended to diagnose, treat, cure or prevent any disease.
                    Individual results may vary.</p>
                <p>© 2024  PluzoKeto + ACV Gummy. All Rights Reserved.
                </p>

                <ul class="terms-links">
                    <li><a href="https://pluzoketo.com/custom-page/" >Privacy Policy
                            |</a></li>
                    <li><a href="https://pluzoketo.com/terms/" >Terms and
                            Conditions |</a></li>
                    <!-- <li><a href="#" >Wireless Policy |</a></li> -->
                    <li><a href="https://pluzoketo.com/refund-policy/" >Refund Policy</a></li>
                </ul>
            </div>
        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
                    <script>
                    $('.slick-main').slick({
                        slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    responsive: [
                        {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            slidesToShow: 1
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            slidesToShow: 1
                        }
                        }
                    ]
                    });
                    </script>