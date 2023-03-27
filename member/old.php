<?php require("./layout/Header.php") ?>
<?php require("./layout/Navbar.php") ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Old Requests</h4>
            <?php require("./layout/db.php") ?>
            <?php
            $sql = "SELECT * FROM user_req WHERE status='Completed' OR status='Canceled' order by id DESC ";
            $result = $conn->query($sql);
            $i = 0;
            if ($result->num_rows > 0) {
                ?>
            <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Reason</th>
                    <th>Amount</th>
                    <th>Status</th>
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
                        <td><?php echo(substr($row["reason"], 0, 20)."...") ?></td>
                        <td><?php echo($row["amount"]) ?></td>
                        <?php
                        if($row["status"]=='Canceled'){
                            ?>
                            <td><label class="badge badge-danger">Canceled</label></td>
                            <?php
                        }elseif($row["status"]=='Completed'){
                            ?>
                            <td><label class="badge badge-success">Completed</label></td>
                            <?php
                        }else{
                            ?>
                            <td><label class="badge badge-warning">In Progress</label></td>
                            <?php
                        }
                        ?>
                        <td>
                            <button class="btn btn-primary px-4 py-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas<?php echo($row["id"])?>" aria-controls="offcanvas<?php echo($row["id"])?>">
                            View
                            </button>

                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas<?php echo($row["id"])?>" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasRightLabel"><?php echo(substr($row["reason"], 0, 20)."...") ?></h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <?php
                                        $userid=$row["userid"];
                                        $sql = "SELECT * FROM user WHERE id='$userid'";
                                        $result1 = $conn->query($sql);
                                        while($row1=$result1->fetch_assoc()){
                                    ?>
                                    <p class="text-secondary">Username : <span style="color:#b66dff"><?php echo($row1["name"]) ?></span></p>
                                    <p class="text-secondary">Email : <span style="color:#b66dff"><?php echo($row1["email"]) ?></span></p>
                                    <p class="text-secondary">Mobile : <span style="color:#b66dff"><?php echo($row1["mobile"]) ?></span></p>
                                    <p class="text-secondary">Amount : <span style="color:#b66dff"><?php echo($row["amount"]) ?></span></p>
                                    <br>
                                    <p class="text-secondary" style="white-space: initial;">Reason : <span style="color:#b66dff"><?php echo($row["reason"]) ?></span></p>
                                    <?php } ?>
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
</div>


<?php require("./layout/Footer.php") ?>