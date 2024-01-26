<?php
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