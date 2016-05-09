<?php
session_start();
include("config.php");

if (!empty($_SESSION['login_user'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Testimonials Manager</title>
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
        <script src="js/site/testimonials.js"></script>
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
                <h1 class="h_2">Testimonials Manager</h1>

                <div class="panel_row form_li">
                    <div class="row">
                        <div class="col-sm-4">
                            <label> Client Name : </label>
                            <select id="clientId">
                                <option value="-1">--Select--</option>
                                <?php
                                $sql = "SELECT * FROM Client where status = 1 order by name ";
                                $result = mysqli_query($iCon, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value='.$row['id'].'>'.$row['name'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label> Testimonial given by : </label>
                            <input type="text" placeholder="Testimonials Given By" id="feedbackBy">
                            <input type="hidden" id="feedbackId">
                        </div>
                        <div class="col-sm-4">
                            <label> Status :</label>
                            <select id="feedbackStatus">
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                        </div>
                        <div class="col-sm-12 ad_top_mar">
                            <label> Feedback :</label>
                            <textarea id="feedbackText"></textarea>
                        </div>
                        <div class="col-sm-12 te_al_cen btn_pan">
                            <input type="button" value="save" id="saveOrUpdateFeedback">
                            <input type="button" value="clear" class="res_btn" id="resetFeedback">
                        </div>
                    </div>
                </div>
                <div class="ful_row data_table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="feedbackTable">
                        <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Testimonial given by</th>
                            <th>Testimonial</th>
                            <th>Status</th>
                            <th>FeedbackId</th>
                            <th>StatusId</th>
                            <th>ClientId</th>
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