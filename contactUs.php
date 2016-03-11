<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>contact us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery-1.12.0.js"></script>
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <script src="js/site/contactUs.js"></script>
      <script src="admin/js/site/common.js"></script>

</head>

<body>
<div id="toTop"><i class="fa fa-chevron-up"></i></div>
<div class="wrapper">
  <header class="ful_row top_head">
      <?php include("header.php"); ?>
  </header>
  <section class="inner_banner in_contact">
    <div class="container inn_info">
      <div class="row">
        <div class="col-sm-6">
          <h1>Contact us</h1>
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
        <div class="col-sm-4">
          <h1 class="h_3">Get in touch</h1>
          <div class="cont_list">
            <ul>
              <li> <i class="fa fa-map-marker"></i>
                <p> Logic Cargo<br>
                  215, Mallin Street<br>
                  New York, NY 100 254 </p>
              </li>
              <li> <i class="fa fa-envelope"></i>
                <p> <span>info@logiccargo.contact.com</span> <span>support@logiccargo.com</span> </p>
              </li>
              <li> <i class="fa fa-phone"></i>
                <p> <span>+0120 123 4 56 789</span> <span>+0120 987 65419</span> </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-8 cont_form">
          <h1 class="h_3">Contact form</h1>
          <div class="row">
            <div class="col-sm-6">
              <input type="text" placeholder="Name" id="personName">
            </div>
            <div class="col-sm-6">
              <input type="text" placeholder="Phone Number" id="phoneNumber">
            </div>
            <div class="col-sm-6">
              <input type="email" placeholder="Email" id="personEmail">
            </div>
            <div class="col-sm-6">
              <input type="text" placeholder="subject" id="contactSubject">
            </div>
            <div class="col-sm-12">
              <textarea placeholder="Comments" id="comments"></textarea>
            </div>
            <div class="col-sm-12">
              <input type="button" value="submit" id="sendContactMail">
              <input type="reset" value="clear" id="clearContactForm">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ful_row ad_pa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d71843.84304007658!2d80.22405600148659!3d13.069561116559056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C+Tamil+Nadu!5e0!3m2!1sen!2sin!4v1457608109595" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <footer class="ful_row">
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
