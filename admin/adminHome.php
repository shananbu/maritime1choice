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
            <div class="panel_box">
                <h1 class="h_2">Admin Home</h1>

                <div class="panel_row form_li">

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