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
                <h1 class="h_2">Help for preparing wesite content </h1>
                <div class="panel_row form_li">
                    <h1 class="h_2">For Job Description : </h1>
                    <textarea readonly>
                        <div class="job_req">
                            <h1>Requirements</h1>
                            <ul>
                                <li> 4+ years JAVA/J2EE development experience, with a strong focus on Struts, Spring and Hibernate. </li>
                                <li> Strong hands-on experience in Jquery.</li>
                                <li> Strong in Integrations, web services, SOAP, XML.</li>
                                <li> In-depth experience with jQuery and/or ExtJS a plus.</li>
                                <li> Solid knowledge of SQL.</li>
                                <li> Strong Communication and Customer facing</li>
                                <li> Independent contributor as well strong team player</li>
                            </ul>
                        </div>
                    </textarea>
                    <h1 class="h_2">For Job Service Type - 1: </h1>
                    <textarea readonly>
                        <h1>Planned Maintenance Support:</h1>
                        <p>Planned Maintenance System (PMS) system allows a Ship owner or Operators to carry out the maintenance in intervals according to the manufactures and classification society requirements. PMS is also essential in maintaining a vessel/Ship/Fleet’s compliance with the regulations of International Safety Management Code. <br>
                            <br>
                            Maritime 1st Choice provides a continuous technical support round the clock to the planned maintenance department and vessel staff’s in all the PMS Modules, especially in the following: </p>
                        <ul>
                            <li>Maintenance system – Ship and Fleet</li>
                            <li>Safety Module</li>
                            <li>ISPS/SSP/Security Module</li>
                            <li>Vessel Technical Manuals </li>
                            <li>Surveys and certificates class society integration</li>
                            <li>Inventory Management</li>
                            <li>Safety Management</li>
                            <li>Quality Management</li>
                            <li>Crewing Management</li>
                            <li>Crew payroll</li>
                            <li>Self-assessment</li>
                            <li>Energy and environmental management</li>
                            <li>Document Control/ Management systems etc.</li>
                        </ul>
                    </textarea>
                    <h1 class="h_2">For Job Service Type - 2: </h1>
                    <textarea readonly>
                        <h1>Inventory Management:</h1>
                        <p>To streamline and to scale up savings companies started to focus on various aspects of operation one such is Procurement and its allied activities. To optimize spending in procuring, Companies must have a visibility in ROB. Maritime1stChoice offers inventory management as a key takeaway for its Clients. </p>
                        <small>Two Types of service offered such as:</small>
                        <h2>1. Baseline Support:</h2>
                        <p> Qualified and Experienced Inventory Team will board the vessel in up keeping of the Ship spares in line with the company Stock up keeping policy if available or done according to Industry best practices. This service is done primarily for beginners who opt Inventory Management for the first time or for a new build. Stock data collected is uploaded in onboard application and report will be submitted. </p>
                        <h2>2. Inventory Audit:</h2>
                        <p> Stock Team will board the vessel to ensure the Stock up keeping is in compliance with the company stock up keeping policy or industry best practices. Audit will be done in each store location provided basis a report will be submitted. Spare Data Audited will be cross verified with the application to avoid any deviation. </p>
                        </article>
                        <article>
                            <h1>DB Building:</h1>
                            <p>Our dedicated team has splendid experience in carving out successful outcomes for all your Data oriented proposals. We help shipping companies in transformation of Data into asset by value addition. <br>
                                <br>
                                Once Database was ignored gains importance in the recent past. An error free Database is the need of the hour. Keeping in this mind, Maritime1stChoice has designed a state of the art Business process with a sequential approach in building a database. Our Database building process is explained below in a nutshell: </p>
                            <ul>
                                <li>Understand Client Requirement – starting of the Project and every week Discuss with Client for the Updates.</li>
                                <li>Hard copy Equipment Technical manuals conversion to Electronic copies.</li>
                                <li>Data coded convert into exclusively designed template with the aid of E copies.</li>
                                <li>Data Conversion by Highly Qualified Personnel-under Domain expertise Guidance.</li>
                                <li>Coded data will be Quality checked at various levels. Three gatekeepers need to approve the data template for error free at each stage.</li>
                                <li>Template reaches the Quality Assurance team for final evaluation of the Data coded. If found to be free of errors, Data will uploaded Client Specified Application, Database will be delivered as injection files or excel sheets as per the clients requirement. Thus Quality is given at most important in all aspects.</li>
                            </ul>

                    </textarea>
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