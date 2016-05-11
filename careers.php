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
    <header class="ful_row top_head single-page-nav">
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
    <section class="inner_wrapper careers_list">
        <div class="container">
            <div class="car_pane" id="peopleAtM1c">
                <h1 class="h_1">People at M1C</h1>
                <p class="te_ali_justify"> M1C Culture &amp; Values - We acknowledge that we are only the worth the
                    value our

                    employees create. It takes every member of our organization to be able to provide the

                    experience we wish for our clients. Therefore we treat our employees guided by the same

                    values as if we were working with our clients. They are well deserved of the same support

                    and respect, for the work and time they invest in our company, as any other stakeholder. <br><br>

                    Reward and Benefits - At M1C we focus much on your performance and we are glad to

                    provide performance related bonus, equitably rewarding employee rewarding employees

                    for their contribution and encouraging long-term commitment. In addition your salary will

                    be reviewed annually and annual bonus is provided to all employee. Along with that you will

                    enjoy health insurance for you and your immediate family. <br><br>

                    Team events – At M1C we believe in working hard and meeting our goal but we also

                    understand that life is not all about working , we need time to relax, keeping that in mind

                    the company holds team events and activities every now and then. The activities can vary

                    from going out for ice cream, or taking a team and family to an amusement park or a

                    generous team lunch.</p>
            </div>
            <section class="ful_row">
                <div class="container">
                    <section class="ad_pa latest_news">
                        <?php include("m1cGallery.php"); ?>
                    </section>
                </div>
            </section>
            <div class="car_pane" id="joinM1c">
                <h1 class="h_1">Career - Join M1C</h1>
                <p class="te_ali_justify">The secret of our success is the people we recruit – and we’re looking for the
                    best. All we

                    need is computing experience, an enquiring mind and the proven ability to solve problems,

                    and a team player. .Join us and you'll find that the focus is all about you. You will be

                    recognised, trained and treated as an individual. You will be working within a supportive

                    environment, where we all like to treat each other like equals. <br><br>


                    Would you like to be a part of M1C family click here to view latest Vacancies. We are always looking
                    for new talents and recruits , please send your CV along with a cover letter, to <a
                        href="mailto:hr@maritime1stchoice.com">hr@maritime1stchoice.com</a>)


                </p>


                <section class="cus_accor_1">
                    <article>
                        <div class="panel-group" id="accordion">
                            <?php

                            $sql = "SELECT * FROM Careers where status = 1 order by createdDate desc";

                            $result = mysqli_query($iCon, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="panel panel-default"><a data-toggle="collapse" class="panel-heading"
                                                                        data-parent="#accordion" href="#collapseOne">
                                            <span> <?php echo $row['title'] ?>, <?php echo $row['location'] ?> </span>
                                            <b>More
                                                Info</b> </a>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="job_desc">
                                                <h1>Job Description</h1>
                                                <p> <?php echo $row['description'] ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } else { ?>
                                <p class="te_ali_justify">
                                    <!--Would you like to be a part of M1C family click here to view latest Vacancies.-->
                                    We are always looking
                                    for new talents and recruits , please send your CV along with a cover letter, to
                                    <a href="mailto:hr@maritime1stchoice.com"> hr@maritime1stchoice.com </a>
                                </p>
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
<script>
    $(document).ready(function () {
        $('.top_menu li').removeClass('top_active');
        $('.top_menu li.careers').addClass('top_active');
    });
</script>
<?php include("footer.php"); ?>
</body>
</html>
