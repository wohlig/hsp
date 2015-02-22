<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="images/bg-cup.png">
<link rel="icon" href="images/bg-cup.png">
<title>Deals | High Street Phoenix</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<style>
    .flexslider .slides img 
    {
        width: 50%; 
        display: block; 
        float: left;
    }
    .flexslider .slides .star{
        width: 20px;
    }
    .sample_data{margin-bottom: 5%;}
</style>
</head>
<body>
<div id="wrap">
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <div id="quick-info" class="clearfix">
    <p class="pointer">High Street Phoenix, Senapati Bapat Marg, Lower Parel, Mumbai, Maharashtra 400013</p>
    <p class="mail"><a href="mailto:info@highstreetphoenix.com" title="">info@highstreetphoenix.com</a></p>
    <p class="phone">+91-22-43339994</p>
    <p class="time">We're open MON through FRI from 7am till 11pm</p>
  </div>
  <header id="wrapper" class="clearfix">
    <h1 id="logo"><a href="index.php">High Street Phoenix</a></h1>
      <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="index.php">HOME
          <div class="nav-button"></div>
          </a></li>
        <li><a href="brands_list.php">BRANDS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="deals_list.php" class="selected">DEALS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="events_list.php">EVENTS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="eat_list.php">DINE
          <div class="nav-button"></div>
          </a></li>
          <li><a href="contact.php">CONTACT
          <div class="nav-button"></div>
          </a></li>
      </ul>
    </div>
  </header>
  <div id="content">
    <div class="container">
      <div id="container" class="clearfix">
        <div class="element  clearfix col2-3 home bg centered slider full detail deals">
          <div class="bg-image">
            <div class="flexslider">
              <div class="images">
                <ul class="slides">
                  <li>
                      img src="<?php echo base_url("frontend")."/";?>images/classes01.jpg" alt=""/>
                       <div class="data">
                          <div class="sample_img" style="background-image: url('images/adidas.png')"></div>
                             <div class="sample_data">
                                <div class="heading">Hours</div>
                                10:00am - 11.00am
                                <div class="heading">Location</div>
                                Ground Floor 1 A
                                <div class="heading"><img src="<?php echo base_url("frontend")."/";?>images/star.png" class="star"/></div><br />
                                FEATURED/NEW
                            </div>
                            <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Vivamus gravida aliquet eros. Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Vivamus gravida aliquet eros. Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Vivamus gravida aliquet eros.</p>
                            <div class="btn btn_slide">Visit Brands</div>
                       </div>
                  </li>
                  <li>
                      img src="<?php echo base_url("frontend")."/";?>images/classes02.jpg" alt=""/>
                       <div class="data">
                          <div class="sample_img" style="background-image: url('images/nike.png')"></div>
                             <div class="sample_data">
                                <div class="heading">Hours</div>
                                08:00am - 10.00am
                                <div class="heading">Location</div>
                                Ground Floor 1 A
                                <div class="heading"><img src="<?php echo base_url("frontend")."/";?>images/star.png" class="star"/></div><br />
                                FEATURED/NEW
                            </div>
                            <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Vivamus gravida aliquet eros.</p>
                            <div class="btn btn_slide">Visit Brands</div>
                       </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="element home clearfix col1-3 full detail adjust">
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
                <div class="heading"><img src="<?php echo base_url("frontend")."/";?>images/star.png" /></div>
                FEATURED/NEW
            </div>
            <div class="dimg">
              <div class="odeal_btn">Visit Brand</div>
            </div>
          </div>

        <div class="element home clearfix col1-3 full detail adjust">
          <div class="info-icon icon_adjust_full"><i class="icons deal"></i>
            
          </div>
            <div class="dimg" style="background-image: url('images/add.png')"></div>
            <div class="dimg" style="background-image: url('images/deal.png')"></div>
            <div class="dimg">
                <div class="heading">Hours</div>
                10:00am - 11.00am
                <div class="heading">Location</div>
                Ground Floor 1 A
                <div class="heading"><img src="<?php echo base_url("frontend")."/";?>images/star.png" /></div>
                FEATURED/NEW
            </div>
            <div class="dimg">
              <div class="odeal_btn">Visit Brand</div>
            </div>
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