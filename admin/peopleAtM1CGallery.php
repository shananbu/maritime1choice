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
        <title>People at M1C Gallery Manager</title>
        <!-- Bootstrap -->
        <link href="css/admin.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="html5shiv.min.js"></script>
        <script src="respond.min.js"></script>
        <![endif]-->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!-- jq_table script start-->
        <link href="css/demo_table.css" rel="stylesheet" type="text/css">
        <link href="css/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery-ui-1.11.2.min.js"></script>

        <!-- jq_table script end-->
        <script src="js/site/common.js"></script>
        <script src="js/site/peopleAtM1CGallery.js"></script>
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
                <h1 class="h_2">People at M1C Gallery Manager</h1>

                <div class="panel_row form_li">
                    <div class="row">
                        <div class="col-sm-4">
                            <label> Event Name : </label>
                            <input type="text" placeholder="Event Name" id="eventName">
                            <input type="hidden" id="eventId">
                        </div>
                        <div class="col-sm-4">
                            <label> Status :</label>
                            <select id="eventStatus">
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label> Event image : </label>
                            <input type="file" placeholder="Event image" id="eventImage" name="eventImage">
                        </div>
                        <div class="col-sm-12 te_al_cen btn_pan">
                            <input type="button" value="save" id="saveOrUpdateEventGallery">
                            <input type="button" value="clear" class="res_btn" id="resetEventGallery">
                        </div>
                    </div>
                </div>
                <div class="ful_row data_table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="eventTable">
                        <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Status</th>
                            <th>Event Image</th>
                            <th>StatusId</th>
                            <th>EventId</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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