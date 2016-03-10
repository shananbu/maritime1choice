<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery-1.12.0.js"></script>
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
</head>

<body>
<div id="toTop"><i class="fa fa-chevron-up"></i></div>
<div class="wrapper">
  <header class="ful_row top_head">
      <?php include("header.php"); ?>
  </header>
  <section class="inner_banner in_about">
    <div class="container inn_info">
      <div class="row">
        <div class="col-sm-6">
          <h1>About Us</h1>
        </div>
        <div class="col-sm-6 bread_crumbs">
          <ul>
            <li>Home</li>
            <li>About us</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="inner_wrapper ad_pa">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 about_info">
          <h1 class="h_3">About Maritime 1st Choice</h1>
          <p class="text_just"> Due to the downward trend in the World economy, shipping companies are operating in tighter margins and looking for ways to scale up their savings. Once overlooked, Marine IT services like Database up keeping have started to gain momentum. Shipping companies have started realizing the vitality of retaining good database onboard that leads to enormous savings in the operating budget. <br>
            <br>
            Rising demand for Marine IT services combined with the aim to aid shipping companies to focus in their core competency led Martime1stChoice founder to establish the company. Maritime1stChoice had a humble beginning in 2014 at Denmark.<br>
            <br>
            In line with our desire to provide quality service at faster pace blended with competitive pricing, Maritime1stChoice branched out to India in 2015 at Tamil Nadu. Companies’ vision is to serve the shipping companies IT service needs at a faster pace and remain as a one stop shop solution provider. Company is driven and governed by values, Quality Management system, Upgraded Technology, above all skilled and inquisitive individuals. </p>
        </div>
        <div class="col-sm-3 aside_right">
          <h1>Our services</h1>
          <ul>
            <li><a href="business_services.html">Marine IT Solutions</a></li>
            <li><a href="business_services.html">Marine Software Solutions</a></li>
            <li><a href="business_services.html">KPO services</a></li>
            <li><a href="business_services.html">Miscellaneous</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="ful_row">
    <div class="container">
        <?php include("news.php"); ?>
    </div>
  </section>
  <footer class="ful_row ad_pa">
      <?php include("footer.php"); ?>
  </footer>
</div>
<script src="js/bootstrap.js"></script> 
<script>
// scroll top 
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
</body>
</html>
