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
                    <li <?php  if($page == 1) {?>class="menu_active" <?php } ?> ><a href="index.php"> Home </a></li>
                    <li <?php  if($page == 3) {?>class="menu_active" <?php } ?> ><a href="businessServices.php?selected=3"> Business Services </a></li>
                    <li <?php  if($page == 4) {?>class="menu_active" <?php } ?> ><a href="newsAll.php?selected=4"> News </a></li>
                    <li <?php  if($page == 5) {?>class="menu_active" <?php } ?> ><a href="careers.php?selected=5"> People </a></li>
                    <li <?php  if($page == 6) {?>class="menu_active" <?php } ?> ><a href="#"> Our Clients </a></li>
                    <li <?php  if($page == 7) {?>class="menu_active" <?php } ?> ><a href="contactUs.php?selected=7"> Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>


<!-- submenu pannel start -->
<div class="submenu index_submenu ful_row single-page-nav">
    <nav class="container">
        <div class="row">
            <ul class="home_submenu col-sm-6 col-sm-offset-6">
                <li><a href="#ourClients"> Our Clients </a></li>
                <li><a href="#testimonials"> Testimonials </a></li>
            </ul>
        </div>
    </nav>
</div>

<!-- submenu pannel end -->