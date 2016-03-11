<?php session_start(); ?>
<?php include("admin/config.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Careers</title>
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
          <h1>Careers</h1>
        </div>
        <div class="col-sm-6 bread_crumbs">
          <ul>
            <li>Home</li>
            <li>Careers</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="inner_wrapper ad_pa careers_list">
    <div class="container">
      <div class="row">
        <h1 class="h_1">Careers at maritime1stchoice</h1>
        <p class="te_ali_cen"> View our job Opportunities below. To see more info click the "More Info" button. </p>
        <section class="cus_accor_1">
        <article>
        <div class="panel-group" id="accordion">
            <?php
            $sql = "SELECT * FROM Careers where status = 1 order by createdDate desc";
            $result = mysqli_query($iCon, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
          <div class="panel panel-default"> <a data-toggle="collapse" class="panel-heading" data-parent="#accordion" href="#collapseOne"> <span> <?php echo $row['title']?>, <?php echo $row['location']?> </span> <b>More Info</b> </a>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="job_desc">
                <h1>Job Description</h1>
                <p> <?php echo $row['description']?> </p>
              </div>
            </div>
          </div>
          <?php } ?>
          </article>
          </section>
        </div>
      </div>
    </div>
  </section>
  <section class="ful_row">
    <div class="container">
      <section class="ad_pa latest_news">
          <?php include("news.php"); ?>
      </section>
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
