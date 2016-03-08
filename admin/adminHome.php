<?php
session_start();
if (!empty($_SESSION['login_user'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Home</title>
        <!-- Bootstrap -->
        <link href="css/admin.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="html5shiv.min.js"></script>
        <script src="respond.min.js"></script>
        <![endif]-->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>

    <header class="navbar-fixed-top top_header ful_row">
        <?php include("adminHeader.php"); ?>
    </header>
    <section id="wrapper">
        <aside class="aside_left" id="sidebar-wrapper">
            <?php include("adminMenu.php"); ?>
        </aside>
        <section class="main_info">
            <div class="h_1"> Latest news</div>
            <div class="panel_box">
                <h1 class="h_2">News Article - 1</h1>

                <div class="panel_row form_li">
                    <div class="row">
                        <div class="col-sm-4">
                            <label> Date </label>
                            <input type="text" placeholder="Enter Date">
                        </div>
                        <div class="col-sm-4">
                            <label> Month </label>
                            <input type="text" placeholder="Enter Month">
                        </div>
                        <div class="col-sm-4">
                            <label> title </label>
                            <input type="text" placeholder="Enter Title">
                        </div>
                        <div class="col-sm-12 ad_top_mar">
                            <label> title </label>
                            <textarea></textarea>
                        </div>
                        <div class="col-sm-12 te_al_cen btn_pan">
                            <input type="button" value="save">
                            <input type="button" value="clear" class="res_btn">
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    </section>
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    </body>
    </html>
<?php
} else {
    header("Location: index.php");
}
?>