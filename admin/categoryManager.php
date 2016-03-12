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
        <title>Category Manager</title>
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

        <script type="text/javascript" language="javascript" src="js/jquery-ui-1.11.2.min.js"></script>

        <script src="js/site/common.js"></script>
        <script src="js/site/categoryManager.js"></script>
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
                <h1 class="h_2">Category Manager</h1>

                <div class="panel_row">
                    <div class="row">
                        <div class="col-sm-4 form_li">
                            <div class="ful_row">
                                <label> Category :</label>
                                <input type="text" placeholder="Enter Category" id="categoryName">
                                <input type="hidden" id="categoryId">
                            </div>
                            <div class="ful_row ad_top_mar">
                                <label> Description :</label>
                                <textarea id="categoryDesc"></textarea>
                            </div>
                            <div class="ful_row">
                                <label> Status :</label>
                                <select id="categoryStatus">
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </div>
                            <div class="ful_row">
                                <label> Display Order :</label>
                                <input type="text" placeholder="Enter display order" id="displayOrder">
                            </div>
                            <div class="ful_row">
                                <label> Show in Home Page :</label>
                                <select id="showInHome">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="ful_row te_al_cen btn_pan">
                                <input type="button" value="save" name="saveOrUpdateButton" id="saveOrUpdateButton">
                                <input type="button" value="clear" class="res_btn" id="resetCategoryButton">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="ful_row data_table">
                                <table cellpadding="0" cellspacing="0" border="0" class="display" id="categoryTable">
                                    <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Display Order</th>
                                        <th>Show in Home</th>
                                        <th>StatusID</th>
                                        <th>CategoryID</th>
                                        <th>Show in HomeID</th>
                                        <th>Description</th>

                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
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