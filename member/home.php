<?php require("./layout/Header.php") ?>
<?php require("./layout/Navbar.php") ?>
<?php require("./layout/db.php") ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        <div class="col-lg-6 col-xl-6 col-sm-12 col-md-12">
            <div class="stretch-card grid-margin">
                <div class="card bg-gradient-primary card-img-holder text-white">
                    <div class="card-body">
                        <img src="/assets/images/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Total New Requests</i>
                        </h4>
                        <h2 class="mb-5">
                            <?php 
                            $result = $conn->query("SELECT * FROM user_req WHERE status='Pending'");
                            echo($result->num_rows)
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6 col-sm-12 col-md-12">
            <div class="stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="/assets/images/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Completed Requests</i>
                        </h4>
                        <h2 class="mb-5">
                            <?php 
                            $result = $conn->query("SELECT * FROM user_req WHERE status='Completed'");
                            echo($result->num_rows)
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6 col-sm-12 col-md-12">
            <div class="stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="/assets/images/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Canceled Requests</i>
                        </h4>
                        <h2 class="mb-5">
                            <?php 
                            $result = $conn->query("SELECT * FROM user_req WHERE status='Canceled'");
                            echo($result->num_rows)
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php require("./layout/Footer.php") ?>