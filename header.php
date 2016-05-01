<?php
$page = 3;
 if (isset($_GET['selected'])) {
    $page = addslashes($_GET['selected']);
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-2 logo"><a href="index.php?selected=1"><img src="images/logo.png"></a></div>
        <div class="col-sm-10 top_menu">
            <nav>
                <ul>
                    <li <?php  if($page == 1) {?>class="menu_active" <?php } ?> ><a href="index.php?selected=1"> Home </a></li>
                    <li <?php  if($page == 3) {?>class="menu_active" <?php } ?> ><a href="businessServices.php?selected=3"> Business Services </a></li>
                    <li <?php  if($page == 4) {?>class="menu_active" <?php } ?> ><a href="newsAll.php?selected=4"> News </a></li>
                    <li <?php  if($page == 5) {?>class="menu_active" <?php } ?> ><a href="careers.php?selected=5"> People </a></li>
                    <li <?php  if($page == 6) {?>class="menu_active" <?php } ?> ><a href="ourClients.php?selected=6"> Our Clients </a></li>
                    <li <?php  if($page == 7) {?>class="menu_active" <?php } ?> ><a href="contactUs.php?selected=7"> Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>