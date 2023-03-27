<?php require("./layout/Header.php") ?>
<?php require("./layout/Navbar.php") ?>

<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="text-secondary">
            Members :&ensp;&ensp;
            <button type="button" class="btn" style="background-color: #b66dff;color:white;padding:10px" data-bs-toggle="modal" data-bs-target="#myModal">
                Add
            </button>
        </h4>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color:#b66dff">Add Member :</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/admin/action/addmember.php" method="post">  
                            <div class="form-floating mb-3 ">
                                <input required type="text" class="form-control"  name="name" placeholder="Name">
                                <label >Name</label>
                            </div>
                            <div class="form-floating mb-3 ">
                                <input required type="number" class="form-control"  name="nationalid" placeholder="National Id">
                                <label >National Id</label>
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

        <?php require("./layout/db.php");?>
        <?php
        $sql = "SELECT * FROM member order by id DESC";
        $result = $conn->query($sql);
        $i = 0;
        if ($result->num_rows > 0) {
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered ">
                <thead style="text-align:center">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>National Id</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                    <tr>
                        <td style="text-align:center"><?php echo ($i) ?></td>
                        <td ><?php echo ($row["name"]) ?></td>
                        <td ><?php echo ($row["nationalid"]) ?></td>
                        <td ><?php echo ($row["mobile"]) ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <?php
        }else{
        ?>
        <h4 class="mt-4 text-center text-secondary">Nothing Found!</h4>
        <?php
        }
        ?>
    </div>
</div>

<script>
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      if(urlParams.get('err')){
        document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:#FF0000;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
      }
      setTimeout(()=>{
          document.getElementById("err").style.display="none"
      }, 3000)
      if(urlParams.get('msg')){
        document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:#4CAF50;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
      }
      setTimeout(()=>{
          document.getElementById("msg").style.display="none"
      }, 3000)
  </script>

<?php require("./layout/Footer.php") ?>