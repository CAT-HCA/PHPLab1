<!doctype html>
<html lang="en">

<?php
    $Subtitle = "Section Details";
?>

<head>
    <?php include("inc/head.php"); ?>

    <!-- linking custom site CSS -->
    <link rel="stylesheet" type="text/css" href="css/section_details.css">

</head>

<body class="w-100 bg-light">

    <?php include("inc/nav.php"); ?>

    <!-- Side Nav Bar -->
    <div class="row container-fluid">
        <div class="sidebar col-md-3 col-xs-12">
            <form>
                <div class="mx-auto">
                    <div class="text-center">
                        <a id="goBackBtn" href="section_dashboard.php"
                            class="text-white text-center btn btn-secondary my-2"><i
                                class="fas fa-arrow-circle-left"></i> Go Back</a>
                        <br>
                    </div>
                    <p id="filterText" class="montserratFont text-white text-center mt-2">Manage Section:</p>
                    <hr class="bg-white">
                </div>
                <div class="text-center">
                    <div><a class="btn btn-sm btn-secondary my-4 w-75" id="editTeamDetails" href="">Edit Team
                            Details</a></div>
                    <div><a class="btn btn-sm btn-secondary my-4 w-75" id="addTeamMember" href="">Add Team Member</a>
                    </div>
                    <div><a class="btn btn-sm btn-secondary my-4 w-75" id="deleteTeam" href="">Delete Section</a></div>
                </div>
            </form>
        </div>
        <!-- end of Side Nav Bar -->

        <!-- MAIN CONTENT -->
        <div class="col-xs-12 col-md-9 mx-auto container-fluid">
            <h1 class="text-center montserratFont col-12" id="dashboardTitle">Section Dashboard</h1>
            <div id="sectionContent" class="mx-auto">
                <div class="card-columns">
                    <div class="card" id="cardId">
                        <div class="card-body bg-dark rounded" id="cardBodyId">
                            <h2 class="card-title mt-2 text-danger montserratFont font-weight-bold">Section Info<a
                                    class="far fa-edit float-right" href="#" id="sectInfoEdit"></a></h2>
                            <p class="card-text text-primary font-weight-bold">Instrument Family: <span
                                    class="font-weight-normal" id="instFamId"></span></p>
                            <p class="card-text text-primary font-weight-bold">Instrument: <span
                                    class="font-weight-normal" id="instrumentId"></span></p>
                            <p class="card-text text-primary font-weight-bold">Description: <span
                                    class="font-weight-normal" id="descriptionId"></span></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-dark rounded">
                            <h2 class="card-title mt-2 text-danger montserratFont font-weight-bold">Membership Info<a
                                    class="far fa-edit float-right" href="#" id="membershipInfoEdit"></a></h2>
                            <p class="card-text text-primary font-weight-bold">Max Section Members: <span
                                    class="font-weight-normal" id="maxSectionMems"></span></p>
                            <p class="card-text text-primary font-weight-bold">Minimum Member Age: <span
                                    class="font-weight-normal" id="minMemAge"></span></p>
                            <p class="card-text text-primary font-weight-bold">Maximum Member Age: <span
                                    class="font-weight-normal" id="maxMemAge"></span></p>
                            <p class="card-text text-primary font-weight-bold">Members Enrolled: <span
                                    class="font-weight-normal" id="membersEnrolled"></span></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-dark rounded">
                            <h2 class="card-title mt-2 text-danger montserratFont font-weight-bold">
                                Section Members
                            </h2>
                            <ul class="list-group" id="membershipListId">

                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-dark rounded">
                            <h2 class="card-title mt-2 text-danger montserratFont font-weight-bold">Section
                                Leader<a class="far fa-edit float-right" href="#" id="sectLeaderEdit"></a></h2>
                            <p class="card-text text-info font-weight-bold">Name:
                                <span class="font-weight-normal" id="sectionLeaderName"></span></p>
                            <p class="card-text text-primary font-weight-bold">Phone: <span class="font-weight-normal"
                                    id="sectionLeaderPhone"></span></p>
                            <p class="card-text text-primary font-weight-bold">Email: <span class="font-weight-normal"
                                    id="sectionLeaderEmail"></span></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-dark rounded">
                            <h2 class="card-title mt-2 text-danger montserratFont font-weight-bold">Section Photo
                            </h2>
                            <img class="card-text card-img-top rounded secPhotoCard" id="sectionPhoto" src="#"
                                alt="Section Photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END OF MAIN CONTENT -->

    <?php include("inc/footer.php"); ?>

    <?php include("inc/includes.php"); ?>

    <script src="scripts/team_details.js"></script>

</body>

</html>