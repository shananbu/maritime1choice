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
<?php

    $clientsPerRow = 4;

    $sql = "SELECT * FROM Client where status = 1 order by name ";

    $result = mysqli_query($iCon, $sql);

    $rowCount  = mysqli_num_rows($result);

    $clientNumber = 0;

    while ($row = mysqli_fetch_assoc($result)) {

    if ($clientNumber % $clientsPerRow == 0) {

    ?>
<section class="inner_wrapper client_page" id="ourClients">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="h_3 ad_pa">Our Esteemed Clients</h1>
      </div>
      <?php } ?>
      <div class="col-sm-3">
        <figure><a href="//<?php echo $row['referenceUrl'] ?>"> <span> <img

                                    src="admin/<?php echo $row['logoFileName'] ?>"> </span> </a>
          <figcaption>
            <h1><?php echo $row['name'] ?></h1>
            <p><?php echo $row['description'] ?></p>
          </figcaption>
        </figure>
      </div>
      <?php

                if ( $rowCount == 1 || $clientNumber == ($clientsPerRow - 1)) {

                ?>
    </div>
    <div class="row">
      <?php }

    $clientNumber = $clientNumber + 1;

    } ?>
    </div>
  </div>
</section>

<!-- Client 1 end  -->

<section  id="testimonials">
  <div class="container test_monial">
    <h1 class="h_3 ad_pa">Testimonials </h1>
	
	<p>
	We are proud to announce that we have some of the top clients within the shipping industry 
Name the clients with their logo and a few words on them-
	</p>
      <article>
        
        <p>The Maersk Group is a worldwide conglomerate that operates in some 130 countries with a workforce of over 89,000 employees. Owning the world’s largest container shipping company, Maersk is involved in a wide range of activities in the shipping, logistics, and the oil and gas industries.  </p>
        <span> - The Maersk Group </span> </article>
		
		
		<article>
        
        <p>ShipNet delivers solutions that help shipping companies operate more efficiently and profitably. ShipNet’s success in this is founded on the fusion of comprehensive shipping industry understanding and world class ERP software that together allows organizations to streamline their processes and manage their information and assets in ways that help them make the right decisions for their business.</p>
        <span> - ShipNet Asia  </span> </article>
		
		
			<article>
        
        <p>“Maritime1stChoice has consistently delivered good results for projects run by ShipNet Asia. Projects are executed professionally and in a cooperative / consultative manner. Keep up the good work!! ” </p>
        <span> - Alfred Verzijl, Regional Manager APAC  </span> </article>
   
  </div>
</section>
<script>
  $(document).ready(function () {
    $('.top_menu li').removeClass('top_active');
	$('.top_menu li.clients').addClass('top_active');
  });
</script>
<?php include("footer.php"); ?>
