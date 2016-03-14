<?php session_start(); ?>
<?php include("admin/config.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Maritime1stChoice.com Welcomes you</title>
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
  <section class="banner_row"> <img src="images/banner_1.jpg">
    <h1> <span>Maritime1stChoice will act as an extended arm of </span> <span> shipping companies in providing solutions suiting </span> Marine IT needs. </h1>
  </section>
  <section class="home_welcome">
    <div class="container">
      <h1 class="h_1">Who We Are</h1>
      <p> Maritime1stChoice will act as an extended arm of shipping companies in providing solutions suiting Marine IT needs.
        Maritime1stChoice is an outsourced strategic partner help shipping companies transforming data into assets by adding value to it. An one stop solution provider for all your Marine IT services. Maritime1stChoice is a result oriented company ensuring Quality work delivered at right time in contributing towards maximizing clients profits. </p>
    </div>
  </section>
  <section class="ful_row">
    <div class="container">
      <div class="row">
        <div class="home_service ad_pa">
          <h1 class="h_1">Our Services</h1>

            <?php
            $catSql = "SELECT id, name, description FROM Category where status = 1 and hasToShowInHome = 1 order by displayOrder";
            $catRowNum = 1;
            $catResult = mysqli_query($iCon, $catSql);
            while ($catRow = mysqli_fetch_assoc($catResult)) { ?>

                <article class="col-sm-4"> <img src="images/img_<?php echo $catRowNum; ?>.jpg">
                    <h2 class="h_2"><?php echo $catRow['name'] ?></h2>
                    <p> <?php echo $catRow['description'] ?> </p>
                    <a href="businessServices.php#service_<?php echo $catRow['id'] ?>"  class="link_1"> <i class="fa fa-angle-double-right"></i> Read More</a>
                </article>
            <?php $catRowNum ++; } ?>
        </div>
        <div class="why_choose ad_pa">
          <div class="header_2">
            <h1 class="h_1">Why should you choose us as partner for your business?</h1>
            <p> We understand respect and implement our stakeholder’s perspective rather than forcing our own.  We understand both emotional and logical rationale that goes into every decision and therefore we work with following 5 values in order to achieve positive result that push us towards our goal. </p>
          </div>
          <div class="row why_info">
            <div class="col-sm-8 cus_accor_1">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default"> <a data-toggle="collapse" class="panel-heading" data-parent="#accordion" href="#collapseOne"> <span>Empathy </span> <i class="fa fa-plus-square"></i> </a>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <p> Empathy is the driving force behind our business. We create our pathway to success through empathetic engagement with our client, partner and employee. A Successful business does not operate alone; each of us needs support of others to achieve positive result, our team understands that, we therefore involve every member of our team and respect their point of view.  As a business we are good in placing ourselves in client´s shoes and understand their perspective and feeling. </p>
                  </div>
                </div>
                <div class="panel panel-default"> <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span>Honesty</span> <i class="fa fa-plus-square"></i> </a>
                  <div id="collapseTwo" class="panel-collapse  collapse">
                    <p> Empathy would not come without honesty it is the cornerstone in the way we do business – We know without honesty one cannot build long term relationship – services lose its value and sooner or later distrust with the client will arise. We believe in honesty and transparency inside out. We are here to make long term relationship not a short term benefit, we believe in what we do and we do it whole heartedly and honestly. </p>
                  </div>
                </div>
                <div class="panel panel-default"> <a data-toggle="collapse" class="panel-heading collapsed" data-parent="#accordion" href="#collapseThree"><span>Uprightness </span> <i class="fa fa-plus-square"></i> </a>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <p> Uprightness in all we do – which means that we do not take advantage of our position in the marked or better knowledge / understanding – we take it out in the open discussion and argumentation. We tells what we believe is the best for the customer/client regardless of the influence on the business ability to invoice. </p>
                  </div>
                </div>
                <div class="panel panel-default"> <a data-toggle="collapse" class="panel-heading collapsed" data-parent="#accordion" href="#collapsefour"><span>Transparency</span> <i class="fa fa-plus-square"></i> </a>
                  <div id="collapsefour" class="panel-collapse collapse">
                    <p> No business is safe business no partner is an honest partner if there is no transparency. We believe in working with close cooperation with our clients and get them involved in decision making process. Through our shared knowledge, and work space (Novell Vibe) our clients are able to collaborate, get an insight on project progress, be a part of collective decision making and maintain continuous dialogue with us. We want our clients to get a “value for their investment” we want to be able to share our book or calculation and time sheet, so they are able to see how we calculate return on their investment, We do business in a righteous manner and therefore we are never afraid to show how we have earned the revenue, we are ready to show our client our operational cost over their investment. </p>
                  </div>
                </div>
                <div class="panel panel-default"> <a data-toggle="collapse" class="panel-heading collapsed" data-parent="#accordion" href="#collapsefive"><span>Promise </span> <i class="fa fa-plus-square"></i> </a>
                  <div id="collapsefive" class="panel-collapse collapse">
                    <p> Transparency and honesty would not mean anything if one is not able to deliver what is promised. We know that quality and timely deliveries are of outmost importance. We make sure that our client gets the best value for their investment and together we are able to deliver products and service that reaches customer’s expectation. This is done by listening to client’s requirements, weekly status meetings with the client, thorough and regular quality checks by experts before final delivery. </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4"> <img src="images/img_4.jpg" class="img-responsive"> </div>
          </div>
        </div>
        <section class="ad_pa latest_news">
            <?php include("news.php"); ?>
        </section>
      </div>
    </div>
  </section>
</div>
<footer class="ful_row ad_pa">
    <?php include("footer.php"); ?>
</footer>
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
