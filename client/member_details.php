<!doctype html>
<html lang="en">

<?php
    $Subtitle = "Add Member";
?>

<head>

    <?php include("inc/head.php"); ?>

</head>

<body class="w-100 bg-light">
    <!--START NAV BAR-->


    <?php include("inc/nav.php"); ?>


    <!-- BREADCRUMB NAV-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a id="viewMemberCrumb">&nbsp;</a></li>
            <li class="breadcrumb-item active" aria-current="page">Member Details</li>
        </ol>
    </nav>
    <!-- END OF BREADCRUMB NAV-->

    <!-- MAIN CONTENT -->
    <div class="col-xs-12 col-md-7 mx-auto container-fluid">
        <h1 class="text-center montserratFont col-12">Viewing <span id="viewMemberTitle" class="font-italic"></span>
        </h1>
        <div id="editMemberDiv" class="mx-auto">
            <form id="editMemberForm">
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">Member Details</legend>
                    <div class="row form-group">
                        <input id="viewMemberId" name="memberid" type="hidden" />
                        <div class="col-12 form-check">
                            <label for="viewMemberSection">Member Section/Instrument: </label>
                            <input type="text" class="form-control" id="viewMemberSection" disabled>
                        </div>
                        <div class="col-6 form-check">
                            <label for="viewMemberName">Member Name: </label>
                            <input type="text" class="form-control" id="viewMemberName" name="membername" disabled>
                        </div>
                        <div class="col-6 form-check">
                            <label for="viewMemberContactName">Contact Name: </label>
                            <input type="text" class="form-control" id="viewMemberContactName" name="contactname"
                                disabled>
                        </div>
                        <div class="col-6 form-check">
                            <label for="viewMemberAge">Member Age: </label>
                            <input type="text" class="form-control" id="viewMemberAge" name="age" disabled>
                        </div>
                        <div class="col-6 form-check">
                            <label for="viewMemberGender">Member Gender: </label>
                            <input type="text" class="form-control" id="viewMemberGender" name="gender" disabled>
                        </div>
                        <div class="col-6 form-check">
                            <!--Drop down for selecting a section-->
                            <label for="viewMemberEmail">Email:</label>
                            <input type="text" class="form-control" id="viewMemberEmail" name="email" disabled>
                        </div>
                        <div class="col-6 form-check">
                            <!--Drop down for selecting a section-->
                            <label for="viewMemberPhone">Phone Number:</label>
                            <input type="text" class="form-control" id="viewMemberPhone" name="phone" disabled>
                        </div>
                    </div>
                </fieldset>
                <div id="errorMessageDiv" class="w-50 mx-auto">
                    <ul id="errorMessages">
                    </ul>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-info my-3" type="button" id="goBackViewMemberBtn" value="Back to Section">
                    <input class="btn btn-info my-3" type="button" id="editViewMemberBtn" value="Edit Member">
                    <input class="btn btn-danger my-3" type="button" id="deleteViewMemberBtn" value="Delete Member">
                </div>
            </form>
        </div>
    </div>
    <!-- END OF MAIN CONTENT -->

    <?php include("inc/footer.php"); ?>

    <?php include("inc/includes.php"); ?>
    <script src="scripts/member_details.js"></script>

</body>

</html>