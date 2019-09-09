<!doctype html>
<html lang="en">

<?php
    $Subtitle = "Add Section";
?>

<head>

    <?php include("inc/head.php"); ?>

    <link rel="stylesheet" type="text/css" href="css/section_dashboard.css">

</head>

<body class="w-100 bg-light">

    <?php include("inc/nav.php"); ?>

    <!-- BREADCRUMB NAV-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="section_dashboard.php">Section Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Section</li>
        </ol>
    </nav>
    <!-- END OF BREADCRUMB NAV-->
    <!-- MAIN CONTENT -->
    <div class="col-xs-12 col-md-7 mx-auto container-fluid">
        <h1 class="text-center montserratFont col-12">Add a Section</h1>
        <div id="addSectionDiv" class="mx-auto">
            <form id="addSectionForm" action="#" method="GET">
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">Section Details</legend>
                    <div class="row form-group">

                        <div class="col-12 form-check">
                            <label for="newSectionTitle">Section Name: </label>
                            <input type="text" class="form-control" id="newSectionTitle" name="teamname">
                        </div>
                        <div id="newSectionLeagueSelectDiv" class="col-12 form-check">
                            <!--Drop down for selecting a section-->
                            <label for="addTeamLeagueDropDown">Instrument Family:</label>
                            <select class="form-control" id="addTeamLeagueDropDown" name="leaguecode">
                                <option value="-1">Choose a group</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">Section Membership</legend>
                    <div class="row form-group">
                        <div class="col-6 form-check">
                            <label for="newSectionMaxMems">Maximum Section Members: </label>
                            <input type="text" class="form-control" id="newSectionMaxMems" name="maxteammembers">
                        </div>
                        <div class="col-6 form-check">
                            <label for="newSectionMinAge">Minimum Member Age: </label>
                            <input type="text" class="form-control" id="newSectionMinAge" name="minmemberage" value="17"
                                readonly>
                        </div>
                        <div class="col-6 form-check">
                            <label for="newSectionMaxAge">Maximum Member Age:</label>
                            <input type="text" class="form-control" id="newSectionMaxAge" name="maxmemberage">
                        </div>
                        <div class="col-6 form-check">
                            <label for="newSectionGender">Member Gender: </label>
                            <input type="text" class="form-control" id="newSectionGender" name="teamgender" value="Any"
                                readonly>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">Section Leader Details</legend>
                    <div class="row form-group">
                        <div class="col-6 form-check">
                            <label for="newSectionManagerName">Name: </label>
                            <input type="text" class="form-control" id="newSectionManagerName" name="managername">
                        </div>
                        <div class="col-6 form-check">
                            <label for="newSectionManagerPhone">Phone Number: </label>
                            <input type="text" class="form-control" id="newSectionManagerPhone" name="managerphone">
                        </div>
                        <div class="col-12 form-check">
                            <!--Drop down for selecting a section-->
                            <label for="newSectionManagerEmail">Email:</label>
                            <input type="text" class="form-control" id="newSectionManagerEmail" name="manageremail">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">About Our Section</legend>
                    <div class="row form-group">
                        <div class="col-6 form-check">
                            <input type="hidden" class="form-control" id="newSectionPhotoUpload" name="picture">
                        </div>
                        <div class="col-12 form-check">
                            <label for="newSectionDescription">Instrument Description: </label>
                            <textarea class="form-control" rows="8" id="newSectionDescription"
                                name="description"></textarea>
                        </div>
                    </div>
                </fieldset>
                <div id="errorMessageDiv" class="w-50 mx-auto">
                    <ul id="errorMessages">
                    </ul>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-primary my-3" type="button" id="createSectionBtn" value="Create Section">
                    <input class="btn btn-danger my-3" type="button" id="cxlCreateBtn" value="Cancel">
                </div>
            </form>
        </div>
    </div>
    <!-- END OF MAIN CONTENT -->
    <?php include("inc/footer.php"); ?>

    <?php include("inc/includes.php"); ?>

    <script src="scripts/add_section.js"></script>

</body>

</html>