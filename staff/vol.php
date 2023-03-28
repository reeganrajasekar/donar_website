<?php require("./layout/Header.php") ?>
<?php require("./layout/Navbar.php") ?>

<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="text-secondary">
            Volunteer :&ensp;&ensp;
            <button type="button" class="btn" style="background-color: #b66dff;color:white;padding:10px" data-bs-toggle="modal" data-bs-target="#myModal">
                Add
            </button>
        </h4>
        <form action="" method="get" class="row">
            <div class="form-group col-lg-6 col-xl-6 col-md-12 col-sm-12">
                <input type="number" required name="mobile" class="form-control" id="exampleInputEmail1" placeholder="Search by Mobile No">
            </div>
            <div class="h-100 col-lg-2 col-xl-2 col-md-12 col-sm-12" >
                <button class="btn btn-primary">Search</button>
            </div>
        </form>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color:#b66dff">Add Volunteer :</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/staff/action/addvol.php" method="post">  
                            <div class="form-floating mb-3 ">
                                <input required type="text" class="form-control"  name="name" placeholder="Name">
                                <label >Name</label>
                            </div>
                            <div class="form-floating mb-3 ">
                                <input required type="email" class="form-control"  name="email" placeholder="Email">
                                <label >Email</label>
                            </div>
                            <div class="form-floating mb-3 ">
                                <input required type="number" class="form-control"  name="mobile" placeholder="Mobile">
                                <label >Mobile</label>
                            </div>
                            <div style="display:flex;justify-content:flex-end">
                                <button class="btn  w-25" style="background-color:#b66dff;color:#fff">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php require("./layout/db.php") ?>
            <?php
            if(isset($_GET["mobile"])){
                $mobile = $_GET["mobile"];
                $sql = "SELECT * FROM vol WHERE mobile='$mobile' order by id DESC ";
            }else{
                $sql = "SELECT * FROM vol order by id DESC ";
            }
            $result = $conn->query($sql);
            $i = 0;
            if ($result->num_rows > 0) {
                ?>
            <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    while($row=$result->fetch_assoc()){
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo($i) ?></td>
                        <td><?php echo($row["name"]) ?></td>
                        <td><?php echo($row["mobile"]) ?></td>
                        <td><?php echo($row["email"]) ?></td>
                        <td>
                            <button class="btn btn-primary px-4 py-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas<?php echo($row["id"])?>" aria-controls="offcanvas<?php echo($row["id"])?>">
                            <i class="mdi mdi-border-color"></i>
                            </button>

                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas<?php echo($row["id"])?>" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasRightLabel"><?php echo($row["name"]) ?></h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <p class="text-secondary">Username : <span style="color:#b66dff"><?php echo($row["name"]) ?></span></p>
                                    <p class="text-secondary">Email : <span style="color:#b66dff"><?php echo($row["email"]) ?></span></p>
                                    <p class="text-secondary">Mobile : <span style="color:#b66dff"><?php echo($row["mobile"]) ?></span></p>
                                    <p class="text-secondary">Hours Collected : <span style="color:#b66dff"><?php echo($row["hour"]) ?></span></p>
                                    <br>
                                    <p>Add Hour:</p>
                                    <form action="/staff/action/change.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo($row["id"]) ?>">
                                        <div class="form-group">
                                            <input type="number" required name="hour" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Add Hour">
                                        </div>
                                        <div class="mt-2" style="text-align:right;height:30px">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            <?php }else{ ?>
                 <h5 class="text-center text-secondary mt-4">Nothing Found!</h5>
            <?php } ?>

    </div>
</div>


<?php require("./layout/Footer.php") ?>