<!doctype html>
<html lang="en">

<?php
    $Subtitle = "Section Dashboard";
?>

<head>
    <?php include("inc/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/section_dashboard.css">

</head>

<body class="w-100 bg-light">
    <!--START NAV BAR-->


    <nav class="navbar navbar-dark navbar-expand-md p-1 px-md-4 bg-warning border-bottom border-white">
        <span class="navbar-brand mb-0 h1">
            <a id="navBarBrandLink" class="navHome" href="index.php"><img class="ml-2"
                    src="images/uconn-wordmark-single-white.png" alt="UConn Work mark logo" /> </a></span>
        <button class="navbar-toggler btn-white" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right flex-row-reverse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link p-2 mr-2 montserratFont active" href="">Section
                    Dashboard</a>
            </div>
        </div>
    </nav>
    <!--END NAV BAR-->

    <!-- Side Nav Bar -->
    <div class="row container-fluid">
        <div class="sidebar col-lg-3 col-xs-12">
            <form>
                <div class="mx-auto">
                    <p class="montserratFont text-white text-center mt-2">Actions:</p>
                    <hr class="bg-white">
                    <div class="text-center">
                        <a id="addSection" class="text-white text-center btn btn-danger my-2"
                            href="add_section.php">Add a New
                            Section</a>

                        <button id="showAllSections" class="text-white text-center btn btn-secondary my-2">Show All
                            Sections</button>
                    </div>
                </div>
                <div class="mx-auto">
                    <p id="filterText" class="montserratFont text-white text-center">Filter Results By:</p>
                    <hr class="bg-white">
                </div>
                <div>
                    <div id="leagueSelectDiv" class="form-group text-secondary text-center w-75 mx-auto">
                        <!--Drop down for selecting a section-->
                        <label for="leagueDropDown" class="text-white">INSTRUMENT FAMILY</label>
                        <select class="form-control" id="leagueDropDown" name="leagueDropDown">
                            <option value="-1">Choose a Family</option>
                        </select>
                        <div class="text-center"><br>-- or --</div>
                    </div>
                    <div id="sectionSelectDiv" class="form-group text-secondary text-center w-75 mx-auto">
                        <!--Drop down for selecting a section-->
                        <label for="sectionDropDown" class="text-white">SECTION</label>
                        <select class="form-control" id="sectionDropDown" name="sectionDropDown">
                            <option value="-1">Choose a Section</option>
                        </select>
                        <div class="text-center"><br>-- or --</div>
                    </div>
                    <div id="managerSelectDiv" class="form-group text-secondary text-center w-75 mx-auto mb-4">
                        <!--Drop down for selecting a section-->
                        <label for="managerDropDown" class="text-white">SECTION LEADER</label>
                        <select class="form-control" id="managerDropDown" name="managerDropDown">
                            <option value="-1">Choose a Section Leader</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <!-- end of Side Nav Bar -->
        <!-- MAIN CONTENT -->

        <div class="col-xs-12 col-lg-9 mx-auto container-fluid">
            <div id="sectionCardDiv" class="text-center">
                <h2 class="montserratFont mt-5" id="noSectionMsg">There are currently no registered Sections</h2>
            </div>
        </div>
    </div>
    <!-- END OF MAIN CONTENT -->

    <?php include("inc/footer.php"); ?>

    <?php include("inc/includes.php"); ?>

    <script src="scripts/section_dashboard.js"></script>

</body>

</html>