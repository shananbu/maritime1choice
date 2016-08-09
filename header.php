<?php

$page = 3;

 if (isset($_GET['selected'])) {

    $page = addslashes($_GET['selected']);

}

?>

<div class="container">
  <div class="row">
    <div class="col-sm-2 logo"><a href="index.php?selected=1"> <img src="images/logo.png"> </a>
    <span aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed"> <i class="fa fa-bars"></i> </span> 
	
     </div>
    <div class="col-sm-10">
      <nav class="nav_menu top_menu collapse navbar-collapse" id="navbar">
        <ul>
          <li class="index"><a href="#"> Home </a></li>
          <li class="bService"><a href="businessServices.php"> Business Services </a></li>
          <li class="news"><a href="newsAll.php"> News </a></li>
          <li class="careers"><a href="careers.php"> People </a></li>
          <li class="clients"><a href="ourClients.php"> Clients </a></li>
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
        <li><a href="#about"> About M1C </a></li>
        <li><a href="#profile"> Profile</a></li>
        <li><a href="#why_mic"> Why M1C </a></li>
        <li><a href="#mis_val"> Mission, Vision & Values </a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- submenu pannel end -->