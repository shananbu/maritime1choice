<?php session_start(); ?>
<?php include("admin/config.php"); ?>

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
</head>

<body>
<div id="toTop"><i class="fa fa-chevron-up"></i></div>
<div class="wrapper pt_sub">
<header class="ful_row top_head single-page-nav">
  <?php include("ourClientsHeaders.php"); ?>
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
<section class="inner_wrapper client_page" id="ourClients">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="h_3 ad_pa">Our Clients</h1>
        <p class="pt_10"> We believe in close cooperation with our clients and getting them involved in the decision-

          making process. Through our shared knowledge, and work platform (Novell Vibe) our clients

          are able to collaborate, get an insight on project progress, be a part of the collective

          decision-making and maintain a continuous dialogue with us. We want our clients to get

          "value for their investment"; we want to be able to share our book or calculation and time

          sheet so that they are able to see how we calculate the return on their investment. We do

          business in a righteous manner and therefore we are never afraid to show how we have

          earned the revenue, we are ready to show our client our operational cost over their

          investments. <br>
          <br>
          For Current clients, please click here to view your shared workspace-<br>
          <a href="https://vibe.reesenconsulting.com" class="lin_hr" target="_blank"> https://vibe.reesenconsulting.com </a> </p>
      </div>
    </div>
  </div>
</section>

<!-- Client 1 end  -->

<section id="testimonials">
  <div class="container test_monial">
    <h1 class="h_3 ad_pa">Testimonials </h1>
    <p class="pt_10"> We are proud to announce that we have some of the top clients within the shipping industry. </p>
    <?php

            $sql = "SELECT * FROM Client where status = 1 order by name ";

            $result = mysqli_query($iCon, $sql);

            while ($row = mysqli_fetch_assoc($result)) {

            ?>
    <div class="row test_cli">
      <div class="ful_row">
        <div class="col-sm-9">
          <article>
            <h1><?php echo $row['name'] ?></h1>
            <p><?php echo $row['description'] ?></p>
          </article>
        </div>
        <div class="col-sm-3 client_page">
          <figure> <a href="//<?php echo $row['referenceUrl'] ?>" target="_blank"> <span> <img
                                        src="admin/<?php echo $row['logoFileName'] ?>"> </span> </a>
            <figcaption>
              <h1><?php echo $row['name'] ?></h1>
            </figcaption>
          </figure>
        </div>
        <?php

                    $tsql = "SELECT * FROM Testimonial where status = 1 and clientId = " . $row['id'] . " order by createdDate desc";

                    $tresult = mysqli_query($iCon, $tsql);

                    while ($trow = mysqli_fetch_assoc($tresult)) {

                        ?>
        <div class="col-sm-9">
          <div class="col-sm-10 tes_block col-sm-offset-2">
            <article>
              <p><?php echo $trow['description'] ?> </p>
              <span> - <?php echo $trow['testimonialBy'] ?></span> </article>
          </div>
        </div>
        <?php }
                    } ?>
      </div>
    </div>
  </div>
</section>
<script>
        $(document).ready(function () {
            $('.top_menu li').removeClass('top_active');
            $('.top_menu li.clients').addClass('top_active');
        });
    </script>
<?php include("footer.php"); ?>
