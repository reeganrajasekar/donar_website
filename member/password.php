<?php require("./layout/Header.php") ?>
<?php require("./layout/Navbar.php") ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Change Password</h4>
            <form class="forms-sample" action="/member/action/password.php" method="post">
                <div class="form-group">
                    <label for="exampleInputUsername1">Old Password</label>
                    <input type="text" required class="form-control" name="old" id="exampleInputUsername1" placeholder="Old Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">New Password</label>
                    <input type="password" required class="form-control" name="new" id="exampleInputConfirmPassword1" placeholder="New Password">
                </div>

                <button type="submit" class="btn btn-gradient-primary me-2">Change</button>
            </form>
            </div>
        </div>
    </div>
</div>


<?php require("./layout/Footer.php") ?>