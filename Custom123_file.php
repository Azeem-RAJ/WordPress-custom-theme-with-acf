<?php
/*
Template Name:  custom Pluzokieto
*/
    $theme_directory = get_template_directory_uri();
    $assets_url = get_template_directory_uri() . '/assets';
?>
 <?php get_template_part('template-parts/header', 'inner'); ?>

        <body class="index-page">    
            <?php
             $group_field_values = get_field('first_section');
            
            if ($group_field_values) {
              // Access the subfields within the Group field
            $sub_field_1_value = $group_field_values['banner-heading-h1'];
            $sub_field_2_value = $group_field_values['banner-heading-h2'];  
            $sub_field_3_value = $group_field_values['banner-heading-h3'];
            $sub_field_4_value = $group_field_values['banners-point1'];  
            $sub_field_5_value = $group_field_values['banners-point2'];  
            $sub_field_6_value = $group_field_values['banners-point3'];  
            $sub_field_7_value = $group_field_values['banners-point4'];
            $banner_arrow_image = $group_field_values['banner-arrow'];  
            $banner_icons_image = $group_field_values['banner-icons'];  
            $banner_product_image = $group_field_values['banner-product-bottle'];
            $sub_field_8_value = $group_field_values['banner-form-heading'];
            $keto_magazines_image = $group_field_values['keto-magazines-img'];
            $keto_magazine_image = $group_field_values['sectiontwo-product1-img'];
            $sub_field2_1_value = $group_field_values['heading-why-section2'];
            $sub_field2_2_value = $group_field_values['heading-span-section2'];
            $sub_field2_3_value = $group_field_values['paragraph-first-section2'];
            $sub_field2_4_value = $group_field_values['paragraph-second-section2'];
            $sub_field2_5_value = $group_field_values['ingredients-heading-section2'];
            $sub_field2_6_value = $group_field_values['ingredients-paragraph-section2'];
            $sub_field3_7_value = $group_field_values['science-title-section3'];
            $sub_field3_8_value = $group_field_values['ketosis-subtitle-section3'];
            $sub_field3_9_value = $group_field_values['science-paragraph-section3'];
            $sub_field3_10_value = $group_field_values['science-section3-img'];
                ?>
            <section class="first-section" id="form1">
            <div class="container">
                <div class="row">
                    <div class="first-section__side first-section__info">
                        <h1><?php echo $sub_field_1_value;?></h1>
                        <h2><?php echo $sub_field_2_value;?></h2>
                        <h3><?php echo $sub_field_3_value;?></h3>
                        <ul>
                            <li><?php echo $sub_field_4_value;?></li>
                            <li><?php echo $sub_field_5_value;?></li>
                            <li><?php echo $sub_field_6_value;?></li>
                            <li><?php echo $sub_field_7_value;?></li>
                        </ul>
                        <img class="arrow_img" alt="" src="<?php echo $banner_arrow_image['url']; ?>">
                        <img alt="" class="security-icons" src="<?php echo $banner_icons_image['url']; ?>">
                        <div class="first-section__bottle">
                            <img alt="" src="<?php echo $banner_product_image['url']; ?>">
                            <ul class="garante-list row">
                            <li class="garante-item_1"></li>
                            <li class="garante-item_2"></li>
                            <li class="garante-item_3"></li>
                        </ul>
                        </div>
                    </div>
                    <div class="first-section__side">
                        <h2 class="form-title">
                            <span>STEP 1</span><?php echo $sub_field_8_value;?>
                        </h2>
			                <form class="form123" id="theForm" method="POST" action="./app/src/create_prospect.php" onsubmit="return validate_optin_form()">
                            <div class="row margin-bottom-5">
                                <div class="phone-6 columns form-holder">
                                    <label>First Name:</label>
                                </div>

                                <div class="phone-6 columns form-holder">
                                    <label>Last Name:</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="phone-6 columns form-holder">
                                    <input class="form-control required" data-placement="auto left" name="fields_fname" id="fields_fname" placeholder="First Name*" title="First Name" type="text">
                                </div>

                                <div class="phone-6 columns form-holder">
                                    <input class="form-control required" data-placement="auto left" name="fields_lname" id="fields_lname" placeholder="Last Name*" title="Last Name" type="text">
                                </div>
                            </div>

                            <div class=" margin-bottom-5">
                                <div class="phone-12 columns form-holder">
                                    <label>Address:</label>
                                </div>
                            </div>

                            <div class="phone-12 columns form-holder">
                                <input class="form-control required" data-placement="auto left" name="fields_address1" id="fields_address1" placeholder="Address*" title="Address" type="text">
                            </div>

                            <div class=" margin-bottom-5 form-holder">
                                <div class="phone-12 columns">
                                    <label>Zip Code:</label>
                                </div>
                            </div>

                            <div class="phone-12 columns form-holder">
                                <input class="form-control required" data-placement="auto left" name="fields_zip" id="fields_zip" placeholder="Zip Code*" title="Zip Code" type="tel" minlength="5" maxlength="5">
                            </div>

                            <div class=" margin-bottom-5 form-holder">
                                <div class="phone-12 columns">
                                    <label>City:</label>
                                </div>
                            </div>

                            <div class="phone-12 columns form-holder">
                                <input class="form-control required" data-placement="auto left" name="fields_city" id="fields_city" placeholder="City*" title="City" type="text">
                            </div>

                            <div class="phone-12 columns form-holder">
                                <label>State:</label>
                                <select name="fields_state" id="fields_state" class="form-control required" data-selected="" data-error-message="State is required">
                                    <option value="" onclick="" selected="selected">Select State</option>
                                    <option value="AL">Alabama (AL)</option>
                                    <option value="AK">Alaska (AK)</option>
                                    <option value="AS">American Samoa (AS)</option>
                                    <option value="AZ">Arizona (AZ)</option>
                                    <option value="AR">Arkansas (AR)</option>
                                    <option value="AE">Armed Forces (AE)</option>
                                    <option value="AA">Armed Forces Americas (AA)</option>
                                    <option value="AP">Armed Forces Pacific (AP)</option>
                                    <option value="CA">California (CA)</option>
                                    <option value="CO">Colorado (CO)</option>
                                    <option value="CT">Connecticut (CT)</option>
                                    <option value="DE">Delaware (DE)</option>
                                    <option value="DC">District of Columbia (DC)</option>
                                    <option value="FM">Federated States of Micronesia (FM)</option>
                                    <option value="FL">Florida (FL)</option>
                                    <option value="GA">Georgia (GA)</option>
                                    <option value="GU">Guam (GU)</option>
                                    <option value="HI">Hawaii (HI)</option>
                                    <option value="ID">Idaho (ID)</option>
                                    <option value="IL">Illinois (IL)</option>
                                    <option value="IN">Indiana (IN)</option>
                                    <option value="IA">Iowa (IA)</option>
                                    <option value="KS">Kansas (KS)</option>
                                    <option value="KY">Kentucky (KY)</option>
                                    <option value="LA">Louisiana (LA)</option>
                                    <option value="ME">Maine (ME)</option>
                                    <option value="MD">Maryland (MD)</option>
                                    <option value="MA">Massachusetts (MA)</option>
                                    <option value="MI">Michigan (MI)</option>
                                    <option value="MN">Minnesota (MN)</option>
                                    <option value="MS">Mississippi (MS)</option>
                                    <option value="MO">Missouri (MO)</option>
                                    <option value="MT">Montana (MT)</option>
                                    <option value="NE">Nebraska (NE)</option>
                                    <option value="NV">Nevada (NV)</option>
                                    <option value="NH">New Hampshire (NH)</option>
                                    <option value="NJ">New Jersey (NJ)</option>
                                    <option value="NM">New Mexico (NM)</option>
                                    <option value="NY">New York (NY)</option>
                                    <option value="NC">North Carolina (NC)</option>
                                    <option value="ND">North Dakota (ND)</option>
                                    <option value="MP">Northern Mariana Islands (MP)</option>
                                    <option value="OH">Ohio (OH)</option>
                                    <option value="OK">Oklahoma (OK)</option>
                                    <option value="OR">Oregon (OR)</option>
                                    <option value="PA">Pennsylvania (PA)</option>
                                    <option value="MH">Republic of Marshall Islands (MH)</option>
                                    <option value="RI">Rhode Island (RI)</option>
                                    <option value="SC">South Carolina (SC)</option>
                                    <option value="SD">South Dakota (SD)</option>
                                    <option value="TN">Tennessee (TN)</option>
                                    <option value="TX">Texas (TX)</option>
                                    <option value="UT">Utah (UT)</option>
                                    <option value="VT">Vermont (VT)</option>
                                    <option value="VI">Virgin Islands of the U.S. (VI)</option>
                                    <option value="VA">Virginia (VA)</option>
                                    <option value="WA">Washington (WA)</option>
                                    <option value="WV">West Virginia (WV)</option>
                                    <option value="WI">Wisconsin (WI)</option>
                                    <option value="WY">Wyoming (WY)</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="phone-6 columns form-holder">
                                    <label>Email:</label>
                                </div>
                                <div class="phone-6 columns form-holder">
                                    <label>Phone:</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="phone-6 columns form-holder">
                                    <input class="form-control required" data-placement="auto left" name="fields_email" id="fields_email" placeholder="Email*" title="Email" type="email">
                                </div>
                                <div class="phone-6 columns form-holder">
                                    <input class="form-control required" data-placement="auto left" name="fields_phone" id="fields_phone" placeholder="Phone Number*" title="Phone Number" type="tel" maxlength="12">

                                </div>
                            </div>

                            <a href="https://checkout.pluzoketo.com/checkout1"  class="button-submit loading-btn">RUSH MY ORDER</a>
                        </form>
                    </div>
                    </div>
                </div>
        </section>
           <section class="why-is">
            <div class="container">
                <div class="row">
                    <div class="why-is__side">
                        <img alt="" src="<?php echo $keto_magazines_image['url'];?>" class="keto-magazines">
                        <img alt="" src="<?php echo $keto_magazine_image['url'];?>" class="keto-prd">
                    </div>
                    <div class="why-is__side">
                        <h2><?php echo $sub_field2_1_value; ?><br><span><?php echo $sub_field2_2_value; ?></span></h2>
                        <p><?php echo $sub_field2_3_value; ?> </p>
                        <p><?php echo $sub_field2_4_value; ?></p>
                            <div class="ingredint">
                                    <h2><?php echo $sub_field2_5_value; ?></h2>
                                    <p><?php echo $sub_field2_6_value; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                   <?php } ?>
         <section class="science green-gradient">
            <div class="container">
                <div class="flip diagonal-line-container">
                    <svg class="diagonal-line" preserveAspectRatio="none" version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                        <polygon fill="#f3f3f3" points="200,500 0,500 300,0 500,0">
                        </polygon>
                    </svg>
                </div>
                <div class="row">
                    <div class="science__left">
                       <h2 class="science__title"><?php echo $sub_field3_7_value; ?></h2>
                                <h2 class="science__subTitle"> <?php echo $sub_field3_8_value; ?></h2>
                        <p><?php echo $sub_field3_9_value; ?></p>


                    </div>
                    <div class="science__right">
                        <div class="science__img">
                            <img alt="" src="<?php echo $sub_field3_10_value['url']; ?>">
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
                                
        <div class="section_5" id="packages">
        <div class="container">
            <p class="common_heading">Order Slimm Gummies Today<br>Choose Your Package</p>
            <div class="s5__row">  
            <?php
              // Assuming you have an array of product IDs
              $product_ids = get_field("select_products"); // Replace with your actual product IDs
              // print_r($product_ids);
              // exit;
              foreach ($product_ids as $product_id) {
                
                    $product_title = $product_id->post_title;
                    
                    $product_price = get_post_meta($product_id->ID, '_price', true);

                      $product_image_url = get_the_post_thumbnail_url($product_id->ID, 'full');

                      $guarantee_title = get_field('guarantee_title', $product_id->ID);

                      $product_permalink = get_permalink($product_id->ID);
                  ?>
                <div class="s5__col s5__col1">
                    <p class="s5__col_head"><?php echo esc_html($product_title); ?></p>
                    <div class="s5__col_product">
                        <img src="<?php echo esc_url($product_image_url); ?>" alt="Product" width="291" height="215">
                    </div>
                    <p class="s5__col_price">$<?php echo esc_html($product_price); ?></p>
                    <p class="s5__col_ship">+ Free Shipping</p>
                    <div class="s5__button_box">
                        <p class="s5__button_caption">60 Days Money Back Guarantee</p>
                        <a href="<?php echo esc_url($product_permalink); ?>" class="s5__button">Order Now</a>
                        <p class="s5__button_caption">All transactions are secured and encryted</p>
                    </div>
                </div>
                <?php } ?>              
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/footer', 'inner'); ?>
</body>