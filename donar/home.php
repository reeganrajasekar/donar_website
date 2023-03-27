<?php
session_start();
if(isset($_SESSION["donarid"])){

}else{
    header("Location:/donar?err=Something Went Wrong!");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donar</title>
    <script src="/assets/js/moment.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background:white;box-shadow:1px 1px 2px #aaa;">
        <div class="container">
            <a class="navbar-brand" style="font-size:22px;font-weight:900;color:#2b74e2" href="">
                <img src="/assets/images/logo.jpg" height="50px" width="auto" alt="">
            </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
                        <a class="nav-link active" style="color:#b66dff" aria-current="page" href="/">Home</a>
                    </li>

					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/donar?msg=Logged out Successfully">Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <button type="button" style="color:#fff;background-color:#b66dff;position:fixed;right:2rem;bottom:2rem;font-size:22px;font-weight:800"  class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
        +
    </button>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color:#b66dff">Donate :</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="/donar/action/donate.php" method="post">    
                    <div class="form-floating mb-3 ">
                        <input required type="number" class="form-control"  name="amount" placeholder="Amount">
                        <label >Amount</label>
                    </div>
                    <div style="display:flex;justify-content:flex-end">
                        <button class="btn  w-25" style="background-color:#b66dff;color:#fff">Donate</button>
                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

    <main class="container mt-3 mb-3">
        <p style="background-color:#b66dff66;padding:10px;border-radius:8px;color:#444;border:1px solid #ccc;font-size:18px">Welcome <span style="font-size:20px;color:white"><?php echo($_SESSION["donarname"])?></span> ,</p>

        <?php require("./layout/db.php");?>
        <?php
        $donarid=$_SESSION["donarid"];
        $sql = "SELECT * FROM donation where donarid='$donarid' order by id DESC";
        $result = $conn->query($sql);
        $i = 0;
        if ($result->num_rows > 0) {
            ?>
        <h5 style="color:rgba(106, 17, 203, 1);">Your Donations :</h5>
        <div class="table-responsive">
            <table class="table table-striped table-bordered ">
                <thead style="text-align:center">
                    <tr>
                        <th>#</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                    <tr>
                        <td style="text-align:center"><?php echo ($i) ?></td>
                        <td ><?php echo ($row["amount"]) ?></td>
                        <td ><script>document.write(moment('<?php echo ($row["reg_date"]) ?>').format('lll'))</script></td>
                        
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
    </main>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>