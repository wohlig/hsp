<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<link rel="icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<title>Deals | High Street Phoenix</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
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
      <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="<?php echo site_url("website/deals_list"); ?>">HOME
          <div class="nav-button"></div>
          </a></li>
        <li><a href="<?php echo site_url("website/brands_list"); ?>">BRANDS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/deals_list"); ?>" class="selected">DEALS
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
  </header>
  <div id="content">
    <div class="container">
      <div id="container" class="clearfix container_about">
        <div class="element  clearfix col2-3 home bg centered slider full detail deals deals_slide">
          <div class="bg-image">
            <div class="flexslider">
              <div class="images">
                <ul class="slides">
                <?php if(count($deals)>0) { 
                    foreach($deals as $deal) { ?>
                  <li>
                      <div class="deal_img">
                           <center> <img src="<?php echo base_url("uploads")."/".$deal->image; ?>" alt="" height="100%" /></center>
                      </div>
                       <div class="data">
                          <div class="sample_img" style="background-image: url('<?php echo base_url("uploads")."/".$deal->logo; ?>')"></div>
                             <div class="sample_data">
                                <div class="heading">Hours</div>
                                <?php echo $deal->hours; ?>
                                <div class="heading">Location</div>
                                <?php echo $deal->location; ?>
                                <div class="heading"><img src="<?php echo base_url("frontend")."/";?>images/star.png" class="star"/></div><br />
                                <?php if($deal->isfeatured==1) { ?>
                                FEATURED
                                <?php }; ?>
                                <?php if($deal->isfeatured == 1 && $deal->isnew == 1) { ?>
                                 /
                                <?php }; ?>
                                <?php if($deal->isnew == 1){ ?>
                                NEW
                                <?php }; ?>
                            </div>
                            <p><?php echo $deal->description; ?></p>
                           <a href="<?php echo site_url("website/brands_inner")."?id=".$deal->id; ?>"> <div class="btn btn_slide">Visit Brand</div></a>
                       </div>
                  </li>
                  <?php }; }else{ ?>
                    <p>No Deals available currently</p>
                   <?php }; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!--<div class="element home clearfix col1-3 full detail adjust">
          <div class="info-icon icon_adjust_full"><i class="icons deal"></i>
            <h2>OTHER DEALS</h2>
          </div>
            <div class="dimg" style="background-image: url('images/add.png')"></div>
            <div class="dimg" style="background-image: url('images/deal.png')"></div>
            <div class="dimg">
                <div class="heading">Hours</div>
                10:00am - 11.00am
                <div class="heading">Location</div>
                Ground Floor 1 A
                <div class="heading"><img src="<?php //echo base_url("frontend")."/";?>images/star.png" /></div>
                FEATURED/NEW
            </div>
            <div class="dimg">
              <div class="odeal_btn">Visit Brand</div>
            </div>
          </div>-->
<?php foreach($normaldeals as $normaldeal) { ?>
        <div class="element home clearfix col1-3 full detail adjust">
          <div class="info-icon icon_adjust_full"><i class="icons deal"></i>
                Other Deals
          </div>
            <div class="dimg" style="background-image: url('<?php echo base_url("uploads")."/".$normaldeal->image; ?>')"></div>
            <!--<div class="dimg deal_desc" style="background-image: url('<?php //echo base_url("uploads")."/".$normaldeal->logo; ?>')"></div>-->

            <div class="dimg deal_desc"><?php echo $deal->description; ?></div>
            <div class="dimg">
                <div class="heading">Hours</div>
                <?php echo $normaldeal->hours; ?>
                <div class="heading">Location</div>
                <?php echo $normaldeal->location; ?>
                <!--<div class="heading"><img src="<?php //echo base_url("frontend")."/";?>images/star.png" /></div>-->
                <!--FEATURED/NEW-->
            </div>
            <div class="dimg">
                <a href="<?php echo site_url("website/brands_inner")."?id=".$normaldeal->id; ?>"><div class="odeal_btn">Visit Brand</div></a>
            </div>
          </div>
          <?php }; ?>
    </div>
  </div>
</div>
</div>
<?php $this->load->view("frontend/footer");?>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/responsive-nav.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/scrollup.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.load_home.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script defer src="<?php echo base_url("frontend")."/";?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/preloader.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/retina.js" type="text/javascript"></script>
</body>
</html>
