<!doctype html>
<html lang="en">

<?php
    $Subtitle = "Edit Section";
?>

<head>

    <?php include("inc/head.php"); ?>
    <!-- linking custom site CSS -->
    <link rel="stylesheet" type="text/css" href="css/site.css">

</head>

<body class="w-100 bg-light">

    <?php include("inc/nav.php"); ?>

    <!-- BREADCRUMB NAV-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a id="manageSectionCrumb">&nbsp;</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Section</li>
        </ol>
    </nav>
    <!-- END OF BREADCRUMB NAV-->
    <!-- MAIN CONTENT -->
    <div class="col-xs-12 col-md-7 mx-auto container-fluid">
        <h1 class="text-center montserratFont col-12">Edit Section</h1>
        <div id="editSectionDiv" class="mx-auto">
            <form id="editSectionForm">
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">Section Details</legend>
                    <div class="row form-group">
                        <div class="col-6 form-check">
                            <label for="editSectionId">Section ID: </label>
                            <input type="text" class="form-control" id="editSectionId" name="teamid" readonly>
                        </div>
                        <div class="col-6 form-check">
                            <label for="editSectionTitle">Section Name: </label>
                            <input type="text" class="form-control" id="editSectionTitle" name="teamname">
                        </div>
                        <div id="editSectionLeagueSelectDiv" class="col-12 form-check">
                            <label for="editSectionLeagueSelectDropDown">Instrument Family:</label>
                            <input class="form-control" id="editSectionLeagueSelectDropDown" name="leaguecode">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">Section Membership</legend>
                    <div class="row form-group">
                        <div class="col-6 form-check">
                            <label for="editSectionMaxMems">Maximum Section Members: </label>
                            <input type="text" class="form-control" id="editSectionMaxMems" name="maxteammembers">
                        </div>
                        <div class="col-6 form-check">
                            <label for="editSectionMinAge">Minimum Member Age: </label>
                            <input type="text" class="form-control" id="editSectionMinAge" name="minmemberage"
                                value="17" readonly>
                        </div>
                        <div class="col-6 form-check">
                            <label for="editSectionMaxAge">Maximum Member Age:</label>
                            <input type="text" class="form-control" id="editSectionMaxAge" name="maxmemberage">
                        </div>
                        <div class="col-6 form-check">
                            <label for="editSectionGender">Member Gender: </label>
                            <input type="text" class="form-control" id="editSectionGender" name="teamgender" value="Any"
                                readonly>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">Section Leader Details</legend>
                    <div class="row form-group">
                        <div class="col-6 form-check">
                            <label for="editSectionManagerName">Name: </label>
                            <input type="text" class="form-control" id="editSectionManagerName" name="managername">
                        </div>
                        <div class="col-6 form-check">
                            <label for="editSectionManagerPhone">Phone Number: </label>
                            <input type="text" class="form-control" id="editSectionManagerPhone" name="managerphone">
                        </div>
                        <div class="col-12 form-check">
                            <!--Drop down for selecting a section-->
                            <label for="editSectionManagerEmail">Email:</label>
                            <input type="text" class="form-control" id="editSectionManagerEmail" name="manageremail">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">About Our Section</legend>
                    <div class="row form-group">
                        <div class="col-12 form-check">
                            <label for="editSectionDescription">Instrument Description: </label>
                            <textarea class="form-control" rows="8" id="editSectionDescription"
                                name="description"></textarea>
                        </div>
                    </div>
                </fieldset>
                <div id="errorMessageDiv" class="w-50 mx-auto">
                    <ul id="errorMessages">
                    </ul>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-primary my-3" type="button" id="editSectionBtn" value="Update Section">
                    <input class="btn btn-danger my-3" type="button" id="clearEditSectionBtn" value="Clear Edits">
                    <input class="btn btn-danger my-3" type="button" id="cxlEditSectionBtn" value="Cancel">
                </div>
            </form>
        </div>
    </div>
    <!-- END OF MAIN CONTENT -->

    <?php include("inc/footer.php"); ?>

    <?php include("inc/includes.php"); ?>
    <script src="scripts/edit_section.js"></script>

</body>

</html>