<!doctype html>
<html lang="en">

<?php
    $Subtitle = "Add Member";
?>

<head>

    <?php include("inc/head.php"); ?>
   

    <!-- linking custom site CSS -->
    <link rel="stylesheet" type="text/css" href="css/section_dashboard.css">

</head>

<body class="w-100 bg-light">

    <?php include("inc/nav.php"); ?>
    
    <!-- BREADCRUMB NAV-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a id="addMemberCrumb">&nbsp;</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Member</li>
        </ol>
    </nav>
    <!-- END OF BREADCRUMB NAV-->

    <!-- MAIN CONTENT -->
    <div class="col-xs-12 col-md-7 mx-auto container-fluid">
        <h1 class="text-center montserratFont col-12">Add a Member</h1>
        <div id="addMemberDiv" class="mx-auto">
            <form id="addMemberForm">
                <fieldset class="border border-primary rounded p-2 my-3">
                    <legend class="text-center w-50">Member Details</legend>
                    <div class="row form-group">
                        <div class="col-12 form-check">
                            <label for="newMemberSection">Member Section/Instrument: </label>
                            <input type="text" class="form-control" id="newMemberSection" disabled>
                        </div>

                        <div class="col-6 form-check">
                            <label for="newMemberName">Member Name: </label>
                            <input type="text" class="form-control" id="newMemberName" name="membername">
                        </div>
                        <div class="col-6 form-check">
                            <label for="newMemberContactName">Contact Name: </label>
                            <input type="text" class="form-control" id="newMemberContactName" name="contactname">
                        </div>
                        <div class="col-6 form-check">
                            <label for="newMemberAge">Member Age: </label>
                            <input type="text" class="form-control" id="newMemberAge" name="age">
                        </div>
                        <div class="col-6 px-4">
                            <p class="mt-1">Member Gender:</p>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="genderMaleRadio"
                                    value="Male" checked>
                                <label class="form-check-label" for="genderMaleRadio">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="genderFemaleRadio"
                                    value="Female">
                                <label class="form-check-label" for="genderFemaleRadio">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="col-6 form-check">
                            <!--Drop down for selecting a section-->
                            <label for="newMemberEmail">Email:</label>
                            <input type="text" class="form-control" id="newMemberEmail" name="email">
                        </div>
                        <div class="col-6 form-check">
                            <!--Drop down for selecting a section-->
                            <label for="newMemberPhone">Phone Number:</label>
                            <input type="text" class="form-control" id="newMemberPhone" name="phone">
                        </div>



                    </div>
                </fieldset>

                <div id="errorMessageDiv" class="w-50 mx-auto">
                    <ul id="errorMessages">
                    </ul>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-primary my-3" type="button" id="addMemberBtn" value="Add Member">
                    <input class="btn btn-danger my-3" type="button" id="cxlAddMemberBtn" value="Cancel">
                </div>
            </form>
        </div>
        </div>

        <?php include("inc/footer.php"); ?>



    <!-- END OF MAIN CONTENT -->
    
    <?php include("inc/includes.php"); ?>
    
    <script src="scripts/add_member.js"></script>

</body>

</html>