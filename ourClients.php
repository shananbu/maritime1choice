<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our Clients</title>
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
          <h1>Our Clients</h1>
        </div>
        <div class="col-sm-6 bread_crumbs">
          <ul>
            <li>Home</li>
            <li>Our Clients</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="inner_wrapper client_page ad_pa">
    <div class="container">
      <div class="row">
      
     
      
      
      
      <!-- Client 1 start  -->
      
        <div class="col-sm-3">
          <figure> <a href="#"> <span> <img src="images/client_1.png"> </span> </a>
            <figcaption>
              <h1>Spectec</h1>
              <p> Mes cuml dia. Sed in lacus ut enim ascing aliiqt. </p>
            </figcaption>
          </figure>
        </div>
        
              <!-- Client 1 end  -->
              
              <!-- Client 2 start  -->
        
        <div class="col-sm-3">
          <figure> <a href="#"> <span> <img src="images/client_2.jpg"> </span> </a>
            <figcaption>
              <h1>SmitLamnalco</h1>
              <p> Mes cuml dia. Sed in lacus ut enim ascing aliiqt. </p>
            </figcaption>
          </figure>
        </div>
         <!-- Client 2 end  -->
         
              <!-- Client 3 start  -->
        <div class="col-sm-3">
          <figure> <a href="#"> <span> <img src="images/client_1.png"> </span> </a>
            <figcaption>
              <h1>Spectec</h1>
              <p> Mes cuml dia. Sed in lacus ut enim ascing aliiqt. </p>
            </figcaption>
          </figure>
        </div>
         <!-- Client 3 end  -->
         
              <!-- Client 4 start  -->
        <div class="col-sm-3">
          <figure> <a href="#"> <span> <img src="images/client_2.jpg"> </span> </a>
            <figcaption>
              <h1>SmitLamnalco</h1>
              <p> Mes cuml dia. Sed in lacus ut enim ascing aliiqt. </p>
            </figcaption>
          </figure>
        </div>
         <!-- Client 4 end  -->

      </div>
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
