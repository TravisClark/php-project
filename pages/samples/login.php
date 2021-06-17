<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
  </head>
  <body>
    <?php
        session_start();
        include_once('connec.php');
        if(isset($_POST['login'])){ 
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $select = "SELECT * FROM `taikhoan` WHERE `TK`='$email' AND `MK` = '$pass'";
            $kq = mysqli_query($conn,$select);
            $num = mysqli_num_rows($kq);
            if($num == 1){
                $user = mysqli_fetch_array($kq);
                $_SESSION['user']['user_HoTen'] = $user['HoTen'];
                header("location: http://localhost:1234/php-project/admin.php");
            }else{
                $error='Tài khoản hoặc mật khẩu không chính xác';
            }
        }
    ?>

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="../../images/logo.svg">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="" placeholder="Username" name="email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="" placeholder="Password" name="password" required>
                  </div>
                  <span style="color:red"><?php if(isset($error)) echo $error?></span><br/>
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="login">Login</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Chưa có tài khoản? <a href="register.php" class="text-primary">Đăng ký ngay.</a>
                  </div>                
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->

  </body>

</html>