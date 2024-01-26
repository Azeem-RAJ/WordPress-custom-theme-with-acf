<?php

/*
Template Name:  Refund Policy
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
<style>
.fk-row{
  display:flex;
  justify-content:flex-start;
  align-items:stretch;
  flex-wrap:nowrap;
  padding:10px;
  height:auto;
}
.fk-row.gjs-selected{
  outline:3px solid red !important;
}
.fk-col{
  min-height:25px;
  flex-grow:1;
  flex-basis:100%;
  padding:10px;
}
.container--tiny{
  max-width:960px;
}
.container{
  padding:0 30px;
  width:100%;
  margin:0 auto;
}
.fk-col.gjs-selected{
  outline:3px solid #f8ba03 !important;
}
#i6973{
  margin: auto;
  padding-top: 150px;
}
#ihtdq{
  font-size:32px;
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  margin-top:15px;
  margin-bottom:15px;
}
#iwg6u{
  font-size:48px;
  font-family:'Montserrat',sans-serif;
  font-weight:400;
}
#i288r{
  font-size:32px;
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  margin-top:15px;
}
#inhtw{
  font-size:32px;
  font-family:'Montserrat',sans-serif;
  margin-top:15px;
  margin-bottom:15px;
  text-align:left;
}
#ipupl{
  font-family:'Montserrat',sans-serif;
  font-weight:400;
  text-align:left;
  margin-top:15px;
  margin-bottom:15px;
}
#i1st8{
  font-family:'Montserrat',sans-serif;
  font-weight:400;
  margin-top:15px;
  margin-bottom:15px;
  font-size:32px;
  line-height:48px;
  text-align:left;
}
#izy78{
  font-family:'Montserrat',sans-serif;
  font-weight:400;
  font-size:32px;
  margin-top:15px;
  margin-bottom:15px;
  text-align:left;
}
img[data-gjs-type="image"][class*="gjs-selected"]{
  outline:3px solid orange !important;
}
#fkt-image-d6c-594-930{
  color:black !important;
  width:227px !important;
  height:88px;
  margin-top:50px;
  margin-bottom:50px;
  object-fit:contain;
}
#iwfri{
  font-size:32px;
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  margin-top:15px;
}
#i8kyg{
  font-size:32px;
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  margin-top:15px;
}
a[data-gjs-type="link"][class*="gjs-selected"]{
  outline:3px solid purple !important;
}
#ilnc4{
  padding:10px;
  font-size:20px;
  font-family:'Montserrat',sans-serif;
  text-align:left;
}
#iwr8d{
  padding:10px;
  font-size:20px;
  font-family:'Montserrat',sans-serif;
  text-align:left;
}
#i9qe1{
  padding:10px;
  font-size:20px;
  font-family:'Montserrat',sans-serif;
  text-align:left;
}
#iafpf{
  padding:10px;
  font-size:20px;
  font-family:'Montserrat',sans-serif;
  font-weight:400;
  text-align:left;
}
.fk-youtube .fk-rm.image{
  -webkit-background-size:cover;
  background-position:center;
  background-repeat:no-repeat;
  width:100%;
  height:100%;
  position:absolute;
}
.fk-youtube .play-button{
  width:90px;
  height:60px;
  background-color:#333;
  box-shadow:0 0 30px rgba( 0,0,0,0.6 );
  z-index:1;
  opacity:0.8;
  border-radius:6px;
}
.fk-youtube .play-button:before{
  content:"";
  border-style:solid;
  border-width:15px 0 15px 26.0px;
  border-color:transparent transparent transparent #fff;
}
.fk-youtube .fk-rm.image, .fk-youtube .play-button{
  cursor:pointer;
}
.fk-youtube .fk-rm.image, .fk-youtube iframe, .fk-youtube .play-button, .fk-youtube .play-button:before{
  position:absolute;
}
.fk-youtube .play-button, .fk-youtube .play-button:before{
  top:50%;
  left:50%;
  transform:translate3d( -50%, -50%, 0 );
}
.fk-youtube iframe{
  height:100%;
  width:100%;
  top:0;
  left:0;
}
#irxp{
  flex-basis:0;
  border-top-width:1px;
  border-bottom-width:1px;
  border-left-width:1px;
  border-right-width:1px;
  border-top-left-radius:1px;
  border-top-right-radius:1px;
  border-bottom-left-radius:1px;
  border-bottom-right-radius:1px;
  flex:0 0;
}
@media (max-width: 768px){
  #fkt-image-d6c-594-930{
	margin-bottom:0;
	height:unset !important;
  }
  #iwg6u{
	font-size:22px !important;
  }
  .fk-row{
	flex-wrap:wrap;
  }
  #ilnc4{
	font-size:14px;
  }
}





        .first-section__info ul li{
            padding: 0;
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
                            @media (max-width: 480px){
  #iwr8d{
	padding-top:0;
	font-size:14px;
  }
  #ic0jw{
	padding-top:0;
	padding-bottom:0;
	padding-left:0;
	padding-right:0;
  }
  .container{
	padding:0 0px;
	width:100%;
	margin:0 auto;
  }
  #iwg6u{
	font-family:'Montserrat',sans-serif;
	letter-spacing:1px;
  }
  #i6973{
	padding-left:10px;
	padding-right:10px;
  }
  #inhtw{
	font-family:'Montserrat',sans-serif;
	font-size:15px;
	line-height:34px !important;
  }
  #izy78{
	font-family:'Montserrat',sans-serif;
	font-size:30px !important;
  }
  #i1st8{
	font-family:'Montserrat',sans-serif;
	font-size:30px !important;
  }
  #ipupl{
	font-family:'Montserrat',sans-serif;
	font-size:30px !important;
  }
  #i9qe1{
	font-size:14px;
  }
  #iafpf{
	font-size:14px;
  }
  #izy78{
	font-size:20px;
  }
  #i1st8{
	font-size:20px;
  }
  #ipupl{
	font-size:20px;
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
        <div id="ic0jw" data-secondsdelay="" class="fk-row">
  <div data-text="text" align="center" id="imtan" data-secondsdelay="" class="col">
  </div>
  <div align="center" id="i6973" data-secondsdelay="" class="fk-col container container--tiny">
	
	<div id="ihtdq" data-secondsdelay="">
	  <div id="iwg6u" data-secondsdelay="" class="fk-headline">Return Policy
	  </div>
	</div>
	<div id="inhtw" data-secondsdelay="" class="fk-headline">
	  <div data-text="text">
		<div data-text="text">Return Policy for the US
		</div>
	  </div>
	</div>
	<div data-text="text" id="ilnc4" data-secondsdelay="">
	  At 
	  Pluzo LLC we do everything we can to ensure you are happy with your purchase, but we know that sometimes a product is just not right. We’ve made our return policy as easy as possible.
	  Please note: If you did not receive the items that you ordered or are missing items that were supposed to come with your hardware, please reach out to the support team at 
	  support@pluzoketo.com or via the contact page here. We can only process these requests within 30 days after delivery.&nbsp;
	</div>
	<div id="izy78" data-secondsdelay="" class="fk-headline">Requirements
	</div>
	<div data-text="text" id="iwr8d" data-secondsdelay="">
	  Within 30 Days
	  - You must request a return within 30 days of the product being shipped to you. Returns must be shipped back to our warehouse within 7 days of receiving your return label.
	  Includes original packaging and product in new condition
	  - Any returned product(s) must be returned in all of their original packaging, and in like-new condition. We may reject the returned product if there is damage to the product and/or product packaging.
	  If a product is deemed unfit for return, we will notify the customer that the return has been rejected and no refund will be issued to the customer. The customer can choose one of the following options:
	  1. The product will be shipped back to the customer at a shipping cost of $30; or
	  2. The product will be recycled.
	  If you do not select one of the above options within 14 days of our informing you that your return has been rejected, the product will be recycled.
	  Free Return Shipping - All orders shipped to the Continental US are eligible for free return shipping using a carrier that we’ve selected. Please follow the instructions below. We are not responsible for risk of loss or damage for returning a product during shipment.&nbsp;
	  For orders outside the Continental US, customers are responsible for purchasing a label and sending the item(s) back to our warehouse. If you provide us with proof of shipment and cost, we can authorize a credit for the cost.
	  Due to the nature of physical gift cards we are unable to offer any returns/refunds on gift card orders once they have been printed. If a gift card order has moved to the proofing stage but not printed, a $15 charge will apply, which will be taken from the refund provided.
	  We offer full refund or exchange for any order received in defective or damaged condition, or missing items, within 30 days from date of purchase.
	  In the event you are missing an item from your order, please contact 
	  support@pluzoketo.com or via the contact page.&nbsp;&nbsp;
	</div>
	<div id="i1st8" data-secondsdelay="" class="fk-headline">Instructions
	</div>
	<div data-text="text" id="i9qe1" data-secondsdelay="">
	  As long as your return adheres to the requirements described above, follow these steps to return your product(s):
	  1. Please fill out the return form at 
	  https://pluzoketo.com/
	  2. After reviewing your return form, we will email you a return label. Print out the return label and securely attach it to a suitable shipping carton.
	  3. Drop the package off at the shipping carrier’s closest location.
	  We will receive and review the products you have returned. If the returned products have met all of our return policy requirements, we will process the refund and send you a confirmation email. We are only able to credit the original credit card used to make the purchase. Please allow up to 8 business days for this process.
	  If you have any questions or concerns about making a return, feel free to contact the support team at support@pluzoketo.com or via the contact page&nbsp;
	</div>
	<div id="i288r" data-secondsdelay="">
	  <div id="ipupl" data-secondsdelay="" class="fk-headline">Agreement
	  </div>
	  <div data-text="text" id="iafpf" data-secondsdelay="">
		<div data-text="text" data-secondsdelay="">
		  <div data-text="text">
			<b data-text="text">Availability
			</b>
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">Every effort is made to maintain sufficient stock of all the products we offer. Potential inventory shortages at our distributor may impact our ability to fulfill an order. We reserve the right to cancel an order if we are, for any reason, unable to fulfill the order requirements. If we are unable to fulfill an order, we will notify you by email.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">
			<b data-text="text">Shipping
			</b>
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">Inventory shortages or other fulfillment issues may cause delays. Your order is shipped using a carrier that we have selected. We cover the shipping fee as long as the shipping address is located in the Continental US. Once you place your order on our online store, we will provide you with an estimated delivery time. Please allow 1-2 business days for processing + delivery. Every effort is made to facilitate the delivery of your order on time. After your order is processed and fulfilled, we will send you an email containing the order tracking number. Once your order is fulfilled and placed in the hands of our selected shipping carrier, we cannot guarantee any delivery date indicated by the carrier.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">
			<b data-text="text">Returns and Refunds
			</b>
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">At 
			<span class="required-field" type="required-field">[[Company Name]]</span>, we do everything we can to ensure you are happy with your purchase, but we know that sometimes a product is just not right. You may return your hardware within 30 days of it being shipped to you, as long as it is in new condition and has the original packaging.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">Please note that Chip &amp; Swipe Readers and physical gift cards are non-returnable and non-refundable.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">No returns are accepted over 30 days. We only accept returns of the hardware we sell directly to you. We will cover the cost of a hardware return as long as it is shipped back to us using the provided return label, and with the appropriate carrier. Priority shipping charges selected at checkout are non-refundable. If we suspect you’re abusing the return policy (for example by returning products on multiple occasions or on a seasonal basis), we reserve the right to refuse your return.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">
			<b data-text="text">End-users and resellers
			</b>
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">Our hardware packages are designed with love and care specifically for our merchants. We reserve the right to refuse selling and shipping any product to you if we have reason to believe you are not a Pluzo LLC&nbsp;customer. Likewise, customer support is only available to the original hardware purchaser. We do not currently sell to or work with resellers.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">
			<b data-text="text">Warranties
			</b>
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">We sell a combination of our own and third party hardware to create a modern point-of-sale.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">
			<b data-text="text">Please Note:
			</b>
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">The warranty on replacement readers are based on the original units fulfillment date. A replacement reader does not extend the 1 year warranty.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">These warranties cover defects in manufacturing discovered while using the product as recommended by the manufacturer. The warranty does not cover damage caused by misuse, abuse, unauthorized modification, improper storage conditions, lightning, or natural disasters. Please contact the support team at 
			<span class="required-field" type="required-field">[[retail-support@ourcompany.com]]</span> or via the contact page here for replacements.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">All third party products resold by us are covered by their original manufacturers’ warranties. Please check with the manufacturer directly for further information.
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">
			<b data-text="text">Limitation of Liability
			</b>
		  </div>
		  <div data-text="text">
			<br>
		  </div>
		  <div data-text="text">We do not accept liability for the purchase, use or return of POS hardware or other products beyond the remedies set forth herein, including but not limited to any liability for product not being available for use, lost profits, loss of business or for lost or corrupted data or software, or the provision of services and support. We will not be liable for any consequential, special, indirect or punitive damages, even if advised of the possibility of such damages or for any claim by any third party. You agree that for any liability related to the purchase of products, We are not liable or responsible for any amount of damages above the amount invoiced for the applicable product. Some jurisdictions may not enforce all of these limitations, and only the limitations that are lawfully applied to you in your jurisdiction will apply.
		  </div>
		</div>
	  </div>
	</div>
	<div data-text="text" id="iwfri" data-secondsdelay="">
	</div>
	<div data-text="text" id="i8kyg" data-secondsdelay="">
	</div>
  </div>
  <div data-text="text" align="center" id="ic0o8" data-secondsdelay="" class="col">
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