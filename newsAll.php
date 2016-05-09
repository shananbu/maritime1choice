<?php session_start(); ?>
<?php include("admin/config.php"); ?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Latest News</title>
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
<div class="wrapper cus_top_fix">
<header class="ful_row top_head single-page-nav">
  <?php include("newsHeader.php"); ?>
</header>
<section class="inner_banner in_about">
  <div class="container inn_info">
    <div class="row">
      <div class="col-sm-6">
        <h1>Latest News</h1>
      </div>
      <div class="col-sm-6 bread_crumbs">
        <ul>
          <li>Home</li>
          <li>News</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="inner_wrapper ad_pa">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 inner_news">
        <ul>
          
          <!-- Latest News 1 start  -->
          
          <?php

              $sql = "SELECT id, title, description, DAY(createdDate) dy, SUBSTRING(MONTHNAME(createdDate), 1, 3) mname, DATE_FORMAT(createdDate, '%d-%b-%Y') postDate FROM News where status = 1 order by createdDate desc";

              $result = mysqli_query($iCon, $sql);

              while ($row = mysqli_fetch_assoc($result)) {

              ?>
          <li id="news_<?php echo $row['id']?>">
            <div class="new_date"><b><?php echo $row['dy']?></b> <span><?php echo $row['mname']?></span> </div>
            <div class="new_panel">
              <h1><?php echo $row['title']?></h1>
              <p> <?php echo $row['description']?> </p>
              <div class="news_footer row">
                <div class="col-sm-6 news_pos_pro"> 
                  
                  <!--<figure> <img src="images/profile.png">

                      <figcaption> Posted By <span> Roman Reigns </span> </figcaption>

                    </figure>--> 
                  
                </div>
                <div class="col-sm-6 news_pos_pro news_pos_dat">
                  <figure> <i class="fa fa-calendar-check-o"></i>
                    <figcaption> <?php echo $row['postDate']?></figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </li>
          <?php } ?>
          
          <!-- Latest News 1 end  -->
          
        </ul>
      </div>
      <div class="col-sm-3 aside_right">
        <?php include("ourServices.php"); ?>
      </div>
    </div>
  </div>
</section>
  <script>
  $(document).ready(function () {
    $('.top_menu li').removeClass('top_active');
	$('.top_menu li.news').addClass('top_active');
  });
</script>
<?php include("footer.php"); ?>

