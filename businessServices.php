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
  <section class="inner_wrapper ad_pa bus_ser">
    <div class="container">
      <div class="row">
        <aside class="col-sm-3 aside_right">
            <h1>business services</h1>
            <ul>
                <?php
                $catSql = "SELECT id, name FROM category where status = 1";
                $catRowNum = 1;
                $catResult = mysqli_query($iCon, $catSql);
                while ($catRow = mysqli_fetch_assoc($catResult)) {
                    ?>
                    <li <?php if ($catRowNum == 1) { ?>class="active"<?php } ?>><a data-toggle="tab" href="businessServices.php#service_<?php echo $catRow['id'] ?>"><?php echo $catRow['name'] ?></a></li>
                    <?php $catRowNum ++; } ?>
            </ul>
        </aside>
        <section class="col-sm-9">
          <div class="serv_list tab-content">
              <?php
              $catSql = "SELECT id, name FROM category where status = 1";
              $catRowNum = 1;
              $catResult = mysqli_query($iCon, $catSql);
              while ($catRow = mysqli_fetch_assoc($catResult)) {
              ?>
              <div id="service_<?php echo $catRow['id']?>" class="<?php if ($catRowNum == 1) { ?>in active tab-pane <?php } else { ?>  tab-pane fade <?php }?>">
                  <h1><?php echo $catRow['name'] ?></h1>
                  <?php
                  $sql = "SELECT * FROM BusinessService where status = 1 and categoryId=".$catRow['id'];
                  $result = mysqli_query($iCon, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <article>
                      <h1><?php echo $row['name'] ?></h1>
                      <?php echo $row['description'] ?>
                  </article>
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
