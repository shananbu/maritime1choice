<footer class="ful_row ad_pa">
  <div class="footer_1 ful_row">
    <div class="container">
      <div class="row">
        <nav class="foot_col_1 foot_nav">
          <h2>Quick Links</h2>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="ourClients.php">Clients</a></li>
            <li><a href="contactUs.php">Contact us</a></li>
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
              <h1>India</h1>
              <p> 12, Kannadasan Nagar Main Road,
                Ramapuram,
                Chennai.
                India-600089 </p>
            </div>
          </div>
          <div class="ful_row">
            <div class="in_cont"> <i class="fa fa-phone"></i>
              <div class="cont_p">
                <h1>Phone</h1>
                <p> Denmark Office: +45 31598800 </p>
                <p> India Office: +91 44 43502168 </p>
                <p> +91 7708924266 </p>
              </div>
            </div>
            <div class="in_cont re_mar"> <i class="fa fa-envelope"></i>
              <div class="cont_p">
                <h1>Mail</h1>
                <p> <a href="mailto:nik@maritime1stchoice.com"> nik@maritime1stchoice.com </a> </p>
              </div>
            </div>
          </div>
        </div>
        <div class="foot_col_5 foot_nav">
          <h2>follow us</h2>
          <ul>
            <li> <a target="_blank" href="https://www.facebook.com/maritime1stchoice/"> <span> <i class="fa fa-facebook"></i> </span> Facebook </a> </li>
            <li> <a target="_blank" href="#"> <span> <i class="fa fa-twitter"></i></span> twitter </a> </li>
            <li> <a target="_blank" href="https://www.linkedin.com/company/maritime1st-choice?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A9386541%2Cidx%3A2-1-4%2CtarId%3A1457672387188%2Ctas%3Amaritime+1st+Choice"><span><i class="fa fa-linkedin"></i></span> linked in </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_2 ful_row">
    <div class="container">
      <div class="row">Copyright @ 2016 maritime1stchoice.com. All rights reserved </div>
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
 

 
</body></html>