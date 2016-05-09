<?php

$page = 3;

if (isset($_GET['selected'])) {

    $page = addslashes($_GET['selected']);

}

?>

<div class="container">
  <div class="row">
    <div class="col-sm-2 logo"><a href="index.php?selected=1"> <img src="images/logo.png"> <span aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed"> <i class="fa fa-bars"></i> </span></a> </div>
    <div class="col-sm-10">
      <nav class="nav_menu top_menu collapse navbar-collapse" id="navbar">
        <ul>
          <li class="index"><a href="index.php"> Home </a></li>
          <li class="bService"><a href="businessServices.php"> Business Services </a></li>
          <li class="news"><a href="newsAll.php"> News </a></li>
          <li class="careers"><a href="#"> People </a></li>
          <li class="clients"><a href="ourClients.php"> Our Clients </a></li>
          <li class="contactUs"><a href="contactUs.php"> Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<!-- submenu pannel start -->

<div class="submenu index_submenu ful_row">
  <nav class="container">
    <div class="row">
      <ul class="home_submenu">
        <li><a href="#peopleAtM1c"> People at M1C </a></li>
        <li><a href="#joinM1c"> Career - Join M1C </a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- submenu pannel end -->