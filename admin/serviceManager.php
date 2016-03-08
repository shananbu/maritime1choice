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
        <title>Service Manager</title>
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
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                oTable = $('#categoryTable').dataTable({
                    "bJQueryUI": true,
                    "bAutoWidth": true,
                    "bSort": true,
                    "bScrollCollapse": false,
                    "sScrollY": "220px",
                    "sPaginationType": "full_numbers"
                });
            });
        </script>
        <!-- jq_table script end-->
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
                <h1 class="h_2">Service Manager</h1>

                <div class="panel_row form_li">
                    <div class="row">
                        <div class="col-sm-4">
                            <label> Category :</label>
                            <select>
                                <option>Cat - 1</option>
                                <option>Cat - 1</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label> Service : </label>
                            <input type="text" placeholder="Enter Service">
                        </div>
                        <div class="col-sm-4">
                            <label> Status :</label>
                            <select>
                                <option>Active</option>
                                <option>InActive</option>
                            </select>
                        </div>
                        <div class="col-sm-12 ad_top_mar">
                            <label> Description :</label>
                            <textarea></textarea>
                        </div>
                        <div class="col-sm-12 te_al_cen btn_pan">
                            <input type="button" value="save">
                            <input type="button" value="clear" class="res_btn">
                        </div>
                    </div>
                </div>
                <div class="ful_row data_table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="categoryTable">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th>Service</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                        </tr>
                        <tr class="odd gradeC">
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0
                            </td>
                            <td>Win 95+</td>
                        </tr>
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