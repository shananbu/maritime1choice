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
</head>

<body>
<div id="toTop"><i class="fa fa-chevron-up"></i></div>
<div class="wrapper">
  <header class="ful_row top_head">
      <?php include("careersServicesHeader.php"); ?>
  </header>
  <section class="inner_banner in_about">
    <div class="container inn_info">
      <div class="row">
        <div class="col-sm-6">
          <h1>People</h1>
        </div>
        <div class="col-sm-6 bread_crumbs">
          <ul>
            <li>Home</li>
            <li>People</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="inner_wrapper ad_pa careers_list">
    <div class="container">
      <div class="row" id="peopleAtM1c">
        <h1 class="h_1">People at M1C</h1>
        <p class="te_ali_cen"> View our job Opportunities below. To see more info click the "More Info" button. </p>
        </div>
      <div class="row" id="m1cCulture">
        <h1 class="h_1">M1C Culture &amp; Values</h1>
        <p class="te_ali_cen"> View our job Opportunities below. To see more info click the "More Info" button. </p>
      </div>
      <div class="row" id="joinM1c">
        <h1 class="h_1">Join M1C – Careers</h1>
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
  $(function () {
    $('#toTop').click(function () {
      $('body,html').animate({scrollTop: 0}, 800);
    });
  });
</script>
<script src="js/jquery.singlePageNav.js"></script>
<script>
  if (!window.console) console = {
    log: function () {
    }
  };
  $('.single-page-nav').singlePageNav({
    offset: $('.single-page-nav').outerHeight(),
    filter: ':not(.external)',
    updateHash: true,
    beforeStart: function () {
      console.log('begin scrolling');
    },
    onComplete: function () {
      console.log('done scrolling');
    }
  });
</script>


<script>
  $(document).ready(function () {
    $(document).on('click', '.top_menu li a', function () {
      $('.top_menu li').removeClass('top_active');
      $(this).closest('li').addClass('top_active');
      $('.submenu').slideToggle();
    });

    $('.top_menu li').removeClass('top_active');
    $('.careers').closest('li').addClass('top_active');
    $('.submenu').slideToggle();
  });
</script>
</body>
</html>
