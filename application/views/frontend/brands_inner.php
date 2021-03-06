<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<link rel="icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<title>Brands | High Street Phoenix</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if gt IE 8]><!--><link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

<style>

    .icon_adjust{
        width: 620px;
    }
    .full p{
        width: 70%;
        float: left;
    }
    .sample_img{
        width: 34%;
        height: 215px;
        background-image: url('images/Aldo.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        float: right;
        margin-top: -17%;
        margin-right: 2%;
    }
    .full-logo{
        height: 200px;
        background-image: url('images/adidas1.png');
        background-repeat: no-repeat;
        background-color: #000;
        background-position: center;
    }
    .soc{
        float: right;
        padding: 3%;
    }
    .share{
        width: 50%;
        height: 50px;
        float: left;
        margin-top: -5%;
        padding: 2%;
    }

</style>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/TweenMax.min.js"></script>
    <script src="<?php echo base_url("frontend")."/";?>js/ScrollToPlugin.min.js"></script>
    <script>
        $(function () {
            var $window = $(window);        //Window object
            var scrollTime = 1.2;           //Scroll time
            var scrollDistance = 170;       //Distance. Use smaller value for shorter scroll and greater value for longer scroll
            $window.on("mousewheel DOMMouseScroll", function (event) {
                event.preventDefault();
                var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
                var scrollTop = $window.scrollTop();
                var finalScroll = scrollTop - parseInt(delta * scrollDistance);
                TweenMax.to($window, scrollTime, {
                    scrollTo: { y: finalScroll, autoKill: true },
                    ease: Power1.easeOut,   //For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
                    autoKill: true,
                    overwrite: 5
                });
            });
        });
        </script>
</head>
<body>
<div id="wrap">
  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>

  <div id="quick-info" class="clearfix top_head_other">
    <p class="pointer">High Street Phoenix, Senapati Bapat Marg, Lower Parel, Mumbai, Maharashtra 400013</p>
    <p class="mail"><a href="mailto:info@highstreetphoenix.com" title="">info@highstreetphoenix.com</a></p>
    <p class="phone">+91-22-43339994</p>
    <p class="time">We're open MON through FRI from 7am till 11pm</p>
  </div>

  <header id="wrapper" class="clearfix header_other">
    <h1 id="logo"><a href="index.php">High Street Phoenix</a></h1>
    <!-- start navi -->

      <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="<?php echo site_url("website/index"); ?>">HOME
          <div class="nav-button"></div>
          </a></li>
        <li><a href="<?php echo site_url("website/brands_list"); ?>" class="selected">BRANDS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/deals_list"); ?>">DEALS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/events_list"); ?>">EVENTS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/eat_list"); ?>">DINE
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/contact"); ?>">CONTACT
          <div class="nav-button"></div>
          </a></li>
      </ul>
    </div>
    <!-- end nav -->
  </header>
  <!-- end header -->
  <div id="content">
    <div class="container">
      <div id="container" class="clearfix">

          <div class="element home clearfix col1-3 full full-logo logo-adj brand_img" style="background-image: url('<?php if($branddata->logo != "") { echo base_url('uploads')."/".$branddata->logo; }else { echo base_url('uploads')."/nologo.jpg"; }?>');">

          </div>

       <!--<div class="element col2-3 col1-2 home">
            <img src="<?php //if($branddata->image != "") {echo base_url("uploads")."/".$branddata->image;} else { echo base_url("uploads")."/noimage.jpg"; } ?>" alt="" height="100%" />
        </div>-->
          <div class="element clearfix col2-3 home bg centered slider brand_inner_brand">
              <div class="bg-image brand_inner_brand">
                <div class="flexslider brand_inner_brand">
                  <div class="images brand_inner_brand">
                    <ul class="slides brand_inner_brand">
                      <?php foreach($brandimages as $image) { ?>

                      <li><center><img src="<?php echo base_url("uploads")."/".$image->image;?>" alt="" /></center></li>

                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

        <div class="element home clearfix col1-3">
          <div class="info-icon icon_adjust">
            <h2><?php echo $branddata->name; ?></h2>

              <!--<div class="soc">
                  <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/fb.png" /></a>
                  <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/pin.png" /></a>
                  <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/tw.png" /></a>
                  <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/insta.png" /></a>
              </div>-->
          </div>
          <div class="scrollbox"><p><?php if($branddata->description != ""){ echo $branddata->description;}else{ echo "NA"; }; ?></p>
        </div></div>
        <div class="element home clearfix col1-3">
          <div class="info-icon no-margin icon_adjust"><i class="icons details"></i>
            <h2>Details</h2>
          </div>
          <div class="infos-left">
            <p class="small">Location</p>
          </div>
          <div class="infos-right">
            <p class="small"><?php if($branddata->location != ""){ echo $branddata->location;}else{ echo "NA"; }; ?></p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
          <div class="infos-left">
            <p class="small">Timings</p>
          </div>
          <div class="infos-right">
            <p class="small"><?php if($branddata->hours != ""){ echo $branddata->hours;}else{ echo "NA"; }; ?></p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
          <div class="infos-left">
            <p class="small">Contact</p>
          </div>
          <div class="infos-right">
            <p class="small"><?php if($branddata->contactno != ""){ echo $branddata->contactno;}else{ echo "NA"; }; ?></p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
            <p class="small" style="padding: 15px"><img src="<?php echo base_url("frontend")."/";?>images/mail.png" /> <?php if($branddata->email != ""){ echo $branddata->email;}else{ echo "NA"; }; ?></p>
          <div class="break"></div>
        </div>
<!-- <?php if($branddata->specialoffer) { ?>
          <div class="element home clearfix col1-3 half detail">
          <div class="info-icon icon_adjust"><div class="info-icon"><i class="icons special"></i>
            <h2>Special Offer</h2>
          </div>
          <p style="width: 58%;"><?php echo $branddata->specialoffer; ?></p>
            <div class="sample_img" style="background-image: url('<?php echo base_url('uploads/').$branddata->specialofferimage; ?>'"></div>
          </div>
    </div>
       <?php }; ?> -->
       <?php foreach($branddeals as $branddeal) { ?>
        <div class="element home clearfix col1-3 full detail">
          <div class="info-icon icon_adjust_full"><i class="icons deal"></i>
            <h2>Deals</h2>
          </div>
          <!--<div class="dimg" style="background-image: url('<?php //echo base_url("uploads")."/".$normaldeal->image; ?>')"></div>-->
          <div class="dimg brand_deal_img" style="background-image: url('<?php echo base_url('uploads')."/".$branddata->specialofferimage; ?>')"></div>
          <!--<div class="dimg deal_desc"><?php //echo $deal->description; ?></div>-->
          <div class="dimg deal_desc"><?php echo $branddata->specialoffer; ?></div>
          <div class="dimg">
            <div class="heading">Brand Name</div>
            <?php echo $branddata->name; ?>
            <div class="heading">Duration</div>
            <?php echo $branddata->duration; ?>
            <div class="heading">Location</div>
            <?php echo $branddata->location; ?>
          </div>
          <p><?php echo $branddeal->description; ?></p>
            <div class="sample_img"></div>
                <ul class="share">
                <li><div id="fb-root"></div></li>
                <li><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div></li>
                <li><a class="twitter-share-button" href="https://twitter.com/share" data-related="twitterdev" data-size="small" data-count="none"></a></li>
                <li><div class="g-plusone" data-annotation="none" data-width="300"></div></li>
               <li><a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="none" data-pin-height="12"></a></li>
            </ul>
           </div>
           <?php }; ?>
    </div>
    <!-- end container -->
  </div>
  <!-- end content -->
</div>
<!-- end wrap -->

<div id="backtotop">
  <ul>
    <li><a id="toTop" href="#" onClick="return false">Back to Top</a></li>
  </ul>
</div>
<!--<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>-->

 <?php $this->load->view("frontend/footer");?>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/responsive-nav.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/scrollup.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/custom.js" type="text/javascript"></script>
<!--<script src="<?php echo base_url("frontend")."/";?>js/jquery.gomap-1.3.2.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.load_home.js" type="text/javascript"></script>
<!--<script src="<?php echo base_url("frontend")."/";?>js/jquery.form.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/input.fields.js" type="text/javascript"></script>-->
<script src="<?php echo base_url("frontend")."/";?>js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script defer src="<?php echo base_url("frontend")."/";?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/preloader.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/retina.js" type="text/javascript"></script>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


</body>
</html>
