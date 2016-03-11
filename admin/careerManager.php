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
        <title>Career Manager</title>
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
        <!-- jq_table script end-->

        <script src="js/site/careerManager.js"></script>
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
                <h1 class="h_2">Career Manager</h1>

                <div class="panel_row form_li">
                    <div class="row">
                        <div class="col-sm-4">
                            <label> Job Title / Role : </label>
                            <input type="text" placeholder="Enter Job Title" id="jobTitle">
                            <input type="hidden" id="jobId">
                        </div>
                        <div class="col-sm-4">
                            <label> Location :</label>
                            <input type="text" placeholder="Enter Location" id="location">
                        </div>
                        <div class="col-sm-4">
                            <label> Qualification :</label>
                            <input type="text" placeholder="Enter Qualification" id="qualification">
                        </div>
                        <div class="col-sm-4">
                            <label> Experience :</label>
                            <input type="text" placeholder="Enter Experience" id="experience">
                        </div>
                        <div class="col-sm-4">
                            <label> No. of Positions :</label>
                            <input type="text" placeholder="Enter Positions" id="numberOfPositions">
                        </div>
                        <div class="col-sm-4">
                            <label> Valid till :</label>
                            <input type="date" placeholder="Enter Validity" id="validity">
                        </div>
                        <div class="col-sm-8 ad_top_mar">
                            <label> Job Description :</label>
                            <textarea id="jobDescription"></textarea>
                        </div>
                        <div class="col-sm-4">
                            <label> Status :</label>
                            <select id="jobStatus">
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                        </div>
                        <div class="col-sm-12 te_al_cen btn_pan">
                            <input type="button" value="save" id="saveOrUpdateJob">
                            <input type="button" value="clear" class="res_btn" id="resetJob">
                        </div>
                    </div>
                </div>
                <div class="ful_row data_table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="careerTable">
                        <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Location</th>
                            <th>Qualification</th>
                            <th>Experience</th>
                            <th>No. of Positions</th>
                            <th>Valid Till</th>
                            <th>Job Description</th>
                            <th>Status</th>
                            <th>StatusId</th>
                            <th>JobId</th>
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