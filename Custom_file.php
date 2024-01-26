<?php
/*
Template Name:  Pluzokieto
*/
    $theme_directory = get_template_directory_uri();
    $assets_url = get_template_directory_uri() . '/assets';
?>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title> PluzoKeto + ACV Gummy</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://secure.trymetabolic.com/v1/assets/brand/favicon.png" rel="icon" type="image/png">

    <link href="https://secure.trymetabolic.com/v1/assets/css/app.css" rel="stylesheet">
    <link href="https://secure.trymetabolic.com/v1/assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" type="text/css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo esc_url( $assets_url . '/mob_style.css' ); ?>" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Oswald:wght@400;500;600;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://secure.trymetabolic.com/v1/assets/css/jquery.autocomplete.css" rel="stylesheet">
        </head>
        <style>
            .first-section__info ul li{
                padding: 0;
            }
            .why-is__side .ingredint h2 {
                margin-bottom: 10px;
                font-size: 1.3125rem;
                margin-top: 35px;
            }
            .slick-main .slick-dots li.slick-active button:before {
                opacity: 0!important;
                color: #000;
            }
            .review{
                position: relative;
                overflow: hidden;
            }
            .slick-main .slick-dots li button:before{
                display: none !important;
            }
            .why-is__side .keto-prd{
                position: absolute;
                left: 28%;
                top: 58%;
                max-width: 50%;
            }
            .first-section__bottle:before{
                left: 0px;
                top: -30px;
            }
            .first-section__bottle{
                position: absolute;
                bottom: -15px;
                right: 38px;
                max-width: 245px;
            }
            .first-section__bottle:after{
                right: -40px;
            }
            .section_5{
                display: none;
            }
            .first-section{
                background-position: right bottom;
            }
            .first-section__info ul li:before{
                display: none;
            }
            .slick-slide{
                height:auto !important;
            }
             .headercustm__logo {
                margin-top: 16px;
                }
            .section_5 {
            float: left;
            width: 100%;
            padding: 60px 0;
            background: #fff;
            z-index: 5;
            position: relative;
            }
            .common_heading {
            float: left;
            width: 100%;
            font-size: 45px;
            line-height: 50px;
            color: #000;
            font-weight: bold;
            text-align: center;
            }

            .s5__row {
            float: left;
            width: 100%;
            margin-top: 60px;
            display: flex;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            align-items: end;
            justify-content: space-between;
            flex-wrap: wrap;
            }
            .s5__col {
            width: 28.5%;
            position: relative;
            border: 1px solid #c3c3c3;
            border-radius: 10px;
            padding: 20px 15px;
            }
            .s5__col3 {
            padding-top: 10px;
            border-color: #e23742 !important;
            box-shadow: 0 0 20px 0 rgba(0,0,0,0.2);
            -webkit-box-shadow: 0 0 20px 0 rgba(0,0,0,0.2) !important;
            }
            .s5__col {
            width: 28.5%;
            position: relative;
            border: 1px solid #c3c3c3;
            border-top-color: rgb(195, 195, 195);
            border-right-color: rgb(195, 195, 195);
            border-bottom-color: rgb(195, 195, 195);
            border-left-color: rgb(195, 195, 195);
            border-radius: 10px;
            padding: 20px 15px;
            padding-top: 20px;
            }
            .s5__col {
            width: 28.5%;
            position: relative;
            border: 1px solid #c3c3c3;
            border-radius: 10px;
            padding: 20px 15px;
            text-align: center;
            }
            .s5__col {
            width: 28.5%;
            position: relative;
            border: 1px solid #c3c3c3;
            border-top-color: rgb(195, 195, 195);
            border-right-color: rgb(195, 195, 195);
            border-bottom-color: rgb(195, 195, 195);
            border-left-color: rgb(195, 195, 195);
            border-radius: 10px;
            padding: 20px 15px;
            padding-top: 20px;
            margin-bottom: 60px;
            }
            .s5__col_head {
            float: left;
            width: 100%;
            color: #e23742;
            font-size: 22px;
            line-height: 36px;
            font-weight: 700;
            letter-spacing: 0.5px;
            }
            .s5__col_product {
            float: left;
            width: 60%;
            margin: 10px 0px 10px 55px;
            }
            .s5__col_price {
            float: left;
            width: 100%;
            margin-top: 20px;
            color: #e23742;
            font-size: 36px;
            line-height: 36px;
            font-weight: 700;
            letter-spacing: 0.5px;
            }
            .s5__col_ship {
            float: left;
            width: 100%;
            margin-top: 8px;
            color: #000;
            font-size: 20px;
            line-height: 20px;
            font-weight: 600;
            text-transform: uppercase;
            }
            .s5__button_box {
            float: left;
            width: 100%;
            margin-top: 30px;
            }
            .s5__button_caption {
            float: left;
            width: 100%;
            color: #000;
            font-size: 12px;
            line-height: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
            }
            .s5__button {
            float: left;
            width: 100%;
            height: 65px;
            margin: 7px 0;
            background: #00bb29;
            border-radius: 6px;
            color: #fff;
            font-size: 28px;
            line-height: 65px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-decoration: none;
            }
            .s5__button_caption {
            float: left;
            width: 100%;
            color: #000;
            font-size: 12px;
            line-height: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
            }
            .s5__col_caption {
            display: inline-block;
            vertical-align: top;
            margin-top: -25px;
            padding: 4px 25px 5px;
            border-radius: 50px;
            background: #e23742;
            color: #fff;
            font-size: 20px;
            line-height: 20px;
            font-weight: 600;
            letter-spacing: 0.5px;
            }
            html {
            scroll-behavior: smooth;
                }
                .company_footer {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                width: 100%;
                }
                .website-secure {
                margin: auto !important;
                }
                .ca {
            margin-top: 20px;
            }
            .company_ul {
                margin-top: 10px;
                }

                        @media screen and (max-width:768px) {
            .s5__col {
            width: 45% !important;
            }
            }
            @media (max-width:580px) {
                .slide__item_right {
                    padding-right: 100px;
                    width: 100%;
                }
                .slide__item_right{
                    padding: 0;
                }
                .slide__item_left {
                    width: 80%;
                    float: unset;
                    margin: auto;
                }
                .science__right{
                    width: 80%;
                    margin: auto;
                }
                .science__left{
                    width: 100% !important;
                }
                .slide__item_right p{
                    margin-top: 20px;
                }
                .slick-main{
                    padding: 0 20px;
                }
                .why-is__side h2{
                    font-size: 2.3125rem;
                }
                        .garante-item_1 {
                    background: url(https://secure.trymetabolic.com/v1/mobile/assets/images/sprite1.png) 0 -335px no-repeat;
                    height: 97px;
                    width: 117px;
                }
                .garante-item_2 {
                    background: url(https://secure.trymetabolic.com/v1/mobile/assets/images/sprite1.pngs) 0 -237px no-repeat;
                    height: 98px;
                    width: 119px;
                }
                .garante-item_3 {
                    background: url(https://secure.trymetabolic.com/v1/mobile/assets/images/sprite1.pngs) 0 -432px no-repeat;
                    height: 96px;
                    width: 116px;
                } 
                        .first-section__info h2 {
                    font-size: 24px;
                    line-height: 29px;
                    max-width: 222px;
                    margin-top: 2px;
                    margin-bottom: 3px;
                }
            .s5__col {
                width: 100% !important;}
                .s5__col_product{
                    margin: 10px 0px 10px 100px !important;
                }
                .header__info_side > span {
            font-size: 20px !important;
                }
                .header__info_side > p {
                font-size: 13px !important;
                }
            
                .header__btn {
            position: fixed;
            bottom: 41px;
            left: 0;
            width: 100%;
            z-index: 21;
        }
        .header__warning .container {
            max-width: 551px!important;
            margin: 0 30px;
        }
        .header:before{
            display: none;
        }
        .headercustm__logo{
            display: flex;
            justify-content: center;
            margin: auto;
            width: 170px;
        }
        .science__subTitle, .science__title {
            font-size: 30px;
        }
        .review h2 {
            font-size: 30px;
        }
        .header__info{
            margin-top: 0;
        }
        .slick-slide img{
            width: unset !important;
            max-width: 100%;
            margin: unset;
        }
                .header__warning {
                    font-size: 12px !important;
                    }
                    .first-section__info h1 {
                            font-size: 66px;
                            line-height: 52px;
                        
                        }
                .first-section__info h3 {
                        max-width: 162px;
                        font-size: 20px;
                        line-height: 24px;
                        margin-top: 9px;
                    }
                    .first-section__side img:first-child {
            max-width: 148px;
        }
                    .first-section__info ul li {
                            font-size: 14px;
                            line-height: 12px;
                        }
                    .common_heading {
                    float: left;
                    width: 100%;
                    font-size: 28px !important;
                    line-height: 35px !important; 
                    color: #000;
                    font-weight: bold;
                    text-align: center;
                    }
                    .first-section__bottle {
                    position: absolute;
                    top: 346px;
                    right: 105px;
                    max-width: 155px;
                    }
                    .first-section__bottle img {
                        width: 100px;
                        }
                        .company-logo {
                        padding-right: 50px;
                        }
                        
                        .security-icons{
                            display:none;
                        }
                        .garante-list {
                            list-style-type: none;
                            position: absolute;
                            bottom: 0;
                            left: -277px;
                            transform: scale(.6, .6);
                            -ms-transform: scale(.6, .6);
                            -webkit-transform: scale(.6, .6);
                            display: block;
                        }
                        .header{
                            position: unset;
                        }
                        .wy-btl {
                        position: absolute;
                        bottom: 0px;
                        left: 41%;
                        width: 33%;
                        }
                        .first-section__info ul li:before{
                            top: 0;
                        }
                        .first-section:before {
                            background: url(https://secure.trymetabolic.com/v1/mobile/assets/images/model.jpg);
                                top: 0;
                                position: absolute;
                                content: '';
                                width: 80%;
                                height: 100%;
                                background-size: cover;
                                background-repeat: no-repeat !important;
                                right: 0;
                        }
                        .first-section{
                            background:unset;
                        }
                        .first-section__info h1{
                            margin-top: 0 !important;
                        } 
                        .first-section__side{
                            width: 61% !important;
                        }
                        .first-section__bottle:after{
                            display: none;
                        }
                        .first-section__bottle{
                            position: unset !important;
                        }
                        .first-section__bottle:before{
                            left: 101px;
                            top: 46px;
                            transform: scale(.6, .6);
                        }
                        .why-is__side:first-child {
                            text-align: center;
                            width: 100%;
                            padding: 0;
                        }
                        .first-section__side:last-child{
                            display: none;
                        }
                        .arrow_img{
                            display: none;
                        }
                        .first-section{
                            position: relative;
                        }
                        .why-is{
                            position: relative;
                        }
                        .first-section{
                            padding-top: 15px;
                        }
                        .why-is__side {
                            float: left;
                            padding: 30px 20px;
                            position: relative;
                            width: 90%;
                            padding-right: 21px;
                            margin: auto;
                        }
                        .header__info{
                            width: 100% !important;
                        }
                        .header__info_side{
                            display: flex;
                            justify-content: center;
                            width: 100% !important;
                        }
                }
        </style>
        <body class="index-page">
    <header class="header">
            <div class="header__warning">
                <div class="container">
                    <span class="alert-color">Warning:</span> Due to extremely high media demand, there is limited
                    supply of
                    <span class="product-name"> PluzoKeto + ACV Gummy</span> in stock
                </div>
            </div>

            <div class="container row">
                <img alt="" class="headercustm__logo" src="<?php echo esc_url( $assets_url)?>/img/logo_new1.png" width="176">
                <div class="header__info row">
                    <div class="header__info_side">
                        <p>  PluzoKeto + ACV Gummy Product in USA</p>
                    </div>
                    <a class="header__btn heartbeat" href="https://checkout.pluzoketo.com/checkout1">RUSH MY ORDER</a>
                </div>
            </div>
        </header>
                         
                         <section class="first-section" id="form1">
            <div class="container">
                <div class="row">
                    <div class="first-section__side first-section__info">
                        <h1>MELT FAT <span>FAST!</span></h1>
                        <h2>WITHOUT DIET OR EXERCISE</h2>
                        <h3>Powerful New Formula Triggers Fat-Burning Ketosis!</h3>
                        <ul>
                            <li>Burn Fat for Energy not Carbs</li>
                            <li>Release Fat Stores</li>
                            <li>Increase Energy Naturally!</li>
                            <li>Love the Way You Feel!</li>
                        </ul>
                        <img class="arrow_img" alt="" src="https://secure.trymetabolic.com/v1//assets/images/arrow.png">
                        <img alt="" class="security-icons" src="https://secure.trymetabolic.com/v1//assets/images/security-icons.png">
                        <div class="first-section__bottle">
                            <img alt="" src="<?php echo esc_url( $assets_url)?>/img/product1.png">
                            <ul class="garante-list row">
                               <li class="garante-item_1"></li>
                               <li class="garante-item_2"></li>
                               <li class="garante-item_3"></li>
                           </ul>
                        </div>
                    </div>

                    <div class="first-section__side">
                        <h2 class="form-title">
                            <span>STEP 1</span> - TELL US WHERE TO SEND YOUR BOTTLE
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
                        <img alt="" src="https://secure.trymetabolic.com/v1//assets/images/keto-magazines.png" class="keto-magazines">
                        <img alt="" src="<?php echo esc_url( $assets_url)?>/img/product1.png" class="keto-prd">
                    </div>
                    <div class="why-is__side">
                        <h2>WHY IS  PluzoKeto + ACV Gummy <br><span>SO POPULAR NOW?</span></h2>
                        <p>A recent study published by the Diabetes, Obesity, and Metabolism Journal found
                            that  PluzoKeto + ACV Gummy supported burning fat for energy instead of carbohydrates
                            greatly increasing weight loss and energy. </p>
                        <p>It is important to note that the  PluzoKeto + ACV Gummy with 100% BHB
                            (Beta-Hydroxybutyrate) used in the study wasthe real deal and  PluzoKeto + ACV Gummy exceeds the studies product potency using proprietary methods.</p>
                        <p>Bottom Line: It Works and it Better for your Health!</p>
                            <div class="ingredint">
                                    <h2>INGREDIENTS</h2>
                                    <p>Sugar, Glucose, Pectin, Dextrose, Sodium Citrate, Sucrose Fatty Acid Ester, Natural Flavor (Apple), Palm Oil, Colors Added (Purple Carrot Juice Concentrate) Citric Acid, Vegetable Oil (contains Carnauba Wax)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                   
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
                       <h2 class="science__title">THE SCIENCE OF</h2>
                                <h2 class="science__subTitle"> KETOSIS ( PluzoKeto + ACV Gummy)</h2>
                        <p>Ketosis is the state where your body is actually burning fat for energy instead of carbs.
                            Ketosis is extremely hard to obtain on your own and takes weeks to
                            accomplish.  PluzoKeto + ACV Gummy actually helps your body achieve ketosis fast and
                            helps you burn fat for energy instead of carbs!</p>


                    </div>
                    <div class="science__right">
                        <div class="science__img">
                            <img alt="" src="https://secure.trymetabolic.com/v1//assets/images/keto-science.png">
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
                        </body>