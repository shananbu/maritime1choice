<footer class="ful_row ad_pa">
  <div class="footer_1 ful_row">
    <div class="container">
      <nav class="foot_col_1 foot_nav">
        <h2>Quick Links</h2>
        <ul>
            <li class="index"><a href="index.php"> Home </a></li>
            <li class="bService"><a href="businessServices.php"> Business Services </a></li>
            <li class="news"><a href="newsAll.php"> News </a></li>
            <li class="careers"><a href="careers.php"> People </a></li>
            <li class="clients"><a href="ourClients.php"> Clients </a></li>
            <li class="contactUs"><a href="contactUs.php"> Contact Us</a></li>
        </ul>
      </nav>
      <nav class="foot_col_2 foot_nav">
        <h2>Our Services</h2>
        <ul>
          <?php
                    $sql = "SELECT * FROM Category where status = 1 order by displayOrder";
                    $result = mysqli_query($iCon, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
          <li><a href="businessServices.php#service_<?php echo $row['id']?>"><?php echo $row['name']?></a></li>
          <?php } ?>
        </ul>
      </nav>
      <div class="foot_col_4 foot_contact foot_nav">
        <h2>Reach us</h2>
        <div class="ful_row"> <i class="fa fa-map-marker"></i>
          <div class="cont_p">
            <h1>M1C – INDIA</h1>
            <p> Maritime First Choice IT Consultancy India LLP<br>
              No.4, 3rd Floor, Priyan Plaza,<br>
              No.76, Nelson Manickam Road,<br>
              Aminjikarai, Chennai – 600 029,<br>
              Tamilnadu,<br>
              India.<br>
              Telephone: +91 44 43502168<br>
            </p>
          </div>
        </div>
        <div class="ful_row"> <i class="fa fa-map-marker"></i>
          <div class="cont_p">
            <h1>M1C – DENMARK</h1>
            <p>Maritime1stChoice ApS<br>
              Leestrupvej 31,<br>
              4683 Rønnede,<br>
              Denmark.<br>
              Telephone: +45 31598800<br>
            </p>
          </div>
        </div>
        <div class="in_cont re_mar"> <i class="fa fa-envelope"></i>
          <div class="cont_p">
            <h1>Mail</h1>
            <p> <a href="mailto:sales@maritime1stchoice.com"> sales@maritime1stchoice.com </a> </p>
            <p> <a href="mailto:info@maritime1stchoice.com"> info@maritime1stchoice.com </a> </p>
          </div>
        </div>
      </div>
      <div class="foot_col_5 foot_nav">
        <h2>follow us</h2>
        <ul>
          <li> <a target="_blank" href="https://www.facebook.com/maritime1stchoice/"> <span> <i class="fa fa-facebook"></i> </span> Facebook </a> </li>
          <li> <a target="_blank" href="https://www.linkedin.com/company/maritime1st-choice?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A9386541%2Cidx%3A2-1-4%2CtarId%3A1457672387188%2Ctas%3Amaritime+1st+Choice"><span><i class="fa fa-linkedin"></i></span> linked in </a> </li>
            <li> <a target="_blank" href="https://vibe.reesen-consulting.com"> <span> <i class="fa fa-chevron-circle-right"></i> </span> Novell Vibe </a> </li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="footer_2 ful_row">
    <div class="container"> <span class="foo_coop">Copyright @ 2016 maritime1stchoice.com. All rights reserved </span>
        <div class="count_panel">
        <div class="count_panel_left"><h2>Total Visitor's  &nbsp;&nbsp;<h2></div>
      <div class="count_panel_left"><a href='#'><img src='http://www.hit-counts.com/counter.php?t=MTM4NjA5MA==' border='0' alt='view Counter'></a></div>
            </div>
    </div>
  </div>
</footer>
</div>
<script src="js/bootstrap.js"> </script> 
<script type="text/javascript">
  $(function() {
    $('#toTop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    });
});
 </script> 
<script src = "js/jquery.singlePageNav.js"> </script> 
<script type="text/javascript">
    if (!window.console) console = {
        log: function() {}
    };
$('.single-page-nav').singlePageNav({
    offset: $('.single-page-nav').outerHeight(),
    filter: ':not(.external)',
    updateHash: true,
    beforeStart: function() {
        console.log('begin scrolling');
    },
    onComplete: function() {
        console.log('done scrolling');
    }
});
 </script> 
<script type="text/javascript">
 $(document).ready(function() {
    $('.submenu').slideToggle();
});
 </script> 
<script src="js/lightbox-plus-jquery.min.js"></script> 
