<?php session_start(); ?>
<?php include("admin/config.php"); ?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buiness Services</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery-1.12.0.js"></script>
</head>

<body>
<div id="toTop"><i class="fa fa-chevron-up"></i></div>
<div class="wrapper pt_sub">
  <header class="ful_row top_head single-page-nav">
    <?php include("businessServicesHeader.php"); ?>
  </header>
  <section class="inner_banner service_banner">
    <div class="container inn_info">
      <div class="row">
        <div class="col-sm-6">
          <h1>Services</h1>
        </div>
        <div class="col-sm-6 bread_crumbs">
          <ul>
            <li>Home</li>
            <li>Services</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="inner_wrapper bus_ser">
    <div class="container">
      <div class="row">
       
        <section class="col-sm-12">
          <div class="serv_list tab-content bus_acor">
            <?php

              $catSql = "SELECT id, name FROM Category where status = 1 order by displayOrder";

              $catRowNum = 1;

              $catResult = mysqli_query($iCon, $catSql);

              while ($catRow = mysqli_fetch_assoc($catResult)) {

              ?>
            <div class="active tab-pane te_ju" id="service_<?php echo $catRow['id']?>">
              <h1><?php echo $catRow['name'] ?></h1>
              <?php

                  $sql = "SELECT * FROM BusinessService where status = 1 and categoryId=".$catRow['id']." order by displayOrder";

                  $result = mysqli_query($iCon, $sql);

                  while ($row = mysqli_fetch_assoc($result)) {

                  ?>
              <article>
                <h1><?php echo $row['name'] ?></h1>
                <?php echo $row['description'] ?> </article>
              <?php } ?>
            </div>
            <?php $catRowNum ++; } ?>
          </div>
        </section>
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
  <script>
  $(document).ready(function () {
    $('.top_menu li').removeClass('top_active');
	$('.top_menu li.bService').addClass('top_active');
  });
</script>
  <?php include("footer.php"); ?>


