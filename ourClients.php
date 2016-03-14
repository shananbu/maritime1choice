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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="toTop"><i class="fa fa-chevron-up"></i></div>
<div class="wrapper">
    <header class="ful_row top_head">
        <?php include("header.php"); ?>
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
    <section class="inner_wrapper client_page ad_pa">
        <div class="container">
            <div class="row">
                <?php } ?>
                <div class="col-sm-3">
                    <figure><a href="<?php echo $row['referenceUrl'] ?>"> <span> <img
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
        </div>
    </section>
    <?php }
    $clientNumber = $clientNumber + 1;
    } ?>
    <!-- Client 1 end  -->


    <footer class="ful_row ad_pa">
        <?php include("footer.php"); ?>
    </footer>
</div>
<script src="js/bootstrap.js"></script>
<script>
    // scroll top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });

        $('#toTop').click(function () {
            $('body,html').animate({scrollTop: 0}, 800);
        });
    });
</script>
</body>
</html>
