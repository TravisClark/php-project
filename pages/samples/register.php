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
      include("connec.php");
      if(isset($_POST['DangKy'])){
        $HoTen = mysqli_real_escape_string($conn, $_REQUEST['txtHoTen']);
        $Email = mysqli_real_escape_string($conn, $_REQUEST['txtEmail']);
        $Password = mysqli_real_escape_string($conn, $_REQUEST['txtPass']);
        $ConfirmPassword = mysqli_real_escape_string($conn, $_REQUEST['txtConfirmPass']);

        $sql = "INSERT INTO `taikhoan`(`TK`, `MK`, `HoTen`) VALUES ('$Email','$Password','$HoTen')";
          
          if($Password == $ConfirmPassword){
            mysqli_query($conn, $sql); 
            header("location: http://localhost:1234/php-project/pages/tables/SanPham.php"); 
          } 
          else{
              $error='Mật khẩu không khớp!';
          }
          mysqli_close($conn);
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
                <h4>Lần đầu truy cập?</h4>
                <h6 class="font-weight-light">Đăng ký đơn giản chỉ với vài bước!</h6>
                <form class="pt-3" method="post">
                  <span style="color:red"><?php if(isset($error)) echo $error?></span><br/>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Họ và Tên" name="txtHoTen" required>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Email" name="txtEmail" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Password" name="txtPass" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="ConfirmPass" name="txtConfirmPass" required>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-primary mr-2" name="DangKy">Đăng ký</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Đã có tài khoản? <a href="login.php" class="text-primary">Đăng nhập.</a>
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