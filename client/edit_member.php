<!doctype html>
<html lang="en">

<?php
    $Subtitle = "Edit Member";
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
            <li class="breadcrumb-item"><a id="editMemberCrumb">&nbsp;</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Member</li>
        </ol>
    </nav>
    <!-- END OF BREADCRUMB NAV-->

    <!-- MAIN CONTENT -->
    <div class="col-xs-12 col-md-7 mx-auto container-fluid">
        <h1 class="text-center montserratFont col-12">Editing <span id="editMemberTitle" class="font-italic"></span>
        </h1>
        <div id="editMemberDiv" class="mx-auto">
            <form id="editMemberForm">
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">Member Details</legend>
                    <div class="row form-group">
                        <input id="editMemberId" name="memberid" type="hidden" />
                        <div class="col-12 form-check">
                            <label for="editMemberSection">Member Section/Instrument: </label>
                            <input type="text" class="form-control" id="editMemberSection" disabled>
                        </div>
                        <div class="col-6 form-check">
                            <label for="editMemberName">Member Name: </label>
                            <input type="text" class="form-control" id="editMemberName" name="membername">
                        </div>
                        <div class="col-6 form-check">
                            <label for="editMemberContactName">Contact Name: </label>
                            <input type="text" class="form-control" id="editMemberContactName" name="contactname">
                        </div>
                        <div class="col-6 form-check">
                            <label for="editMemberAge">Member Age: </label>
                            <input type="text" class="form-control" id="editMemberAge" name="age">
                        </div>
                        <div class="col-6 form-check">
                            <label for="editMemberGender">Member Gender: </label>
                            <input type="text" class="form-control" id="editMemberGender" name="gender" readonly>
                        </div>
                        <div class="col-6 form-check">
                            <!--Drop down for selecting a section-->
                            <label for="editMemberEmail">Email:</label>
                            <input type="text" class="form-control" id="editMemberEmail" name="email">
                        </div>
                        <div class="col-6 form-check">
                            <!--Drop down for selecting a section-->
                            <label for="editMemberPhone">Phone Number:</label>
                            <input type="text" class="form-control" id="editMemberPhone" name="phone">
                        </div>



                    </div>
                </fieldset>

                <div id="errorMessageDiv" class="w-50 mx-auto">
                    <ul id="errorMessages">
                    </ul>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-primary my-3" type="button" id="editMemberBtn" value="Update Member">
                    <input class="btn btn-danger my-3" type="button" id="clearEditMemberBtn" value="Clear Edits">
                    <input class="btn btn-danger my-3" type="button" id="cxlEditMemberBtn" value="Cancel">
                </div>
            </form>
        </div>

    </div>
    <!-- END OF MAIN CONTENT -->
    <?php include("inc/footer.php"); ?>
    <?php include("inc/includes.php"); ?>
    <script src="scripts/edit_member.js"></script>

</body>

</html>