<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Donar Signup</title>
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-4">
                <div class="brand-logo text-center">
                  <img src="/assets/images/logo.svg">
                </div>
                <h5 class="text-secondary">Donar Signup Form</h5>
                <form class="pt-1" action="/donar/register.php" method="post">
                    <div class="form-group">
                        <input type="text" name="name" required class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="number" name="mobile" required class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Mobile">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" required class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" required class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                    </div>
                    <div class="text-center mt-4 font-weight-light"> Do you have an account? <a href="/donar/" class="text-primary">Sign In</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
  </body>
</html>