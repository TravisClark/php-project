<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>



<!DOCTYPE html>
<html lang="en" xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

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
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="shortcut icon" href="../../images/favicon.png" />

<!--[if gte mso 9]><xml>
<mso:CustomDocumentProperties>
<mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers msdt:dt="string">Software testing (Ki&#7875;m th&#7917; ph&#7847;n m&#7873;m)_202_DTH0120_01 Members</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers>
<mso:SharedWithUsers msdt:dt="string">151;#Software testing (Ki&#7875;m th&#7917; ph&#7847;n m&#7873;m)_202_DTH0120_01 Members</mso:SharedWithUsers>
</mso:CustomDocumentProperties>
</xml><![endif]-->
</head>
<?php
  include("connec.php");
  $id = @$_GET["id"];
  $MaSP = @$_POST["txtMaSP"];
  $TenSP = @$_POST["txtTenSP"];
  $MaNhom = @$_POST["txtMaNhom"];
  $TH = @$_POST["txtThuongHieu"];
  $Mota = @$_POST["txtMoTa"];
  $Anh = @$_POST["txtAnh"];
  $Gia = @$_POST["txtGia"];
  $SoLuong = @$_POST["txtSoLuong"];

  $command = "SELECT * FROM `sanpham` WHERE `MaSP` = '$id' ";
  $result = mysqli_query($conn,$command);
  $row = mysqli_fetch_array($result);

  if (isset($_POST["Cancel"])){
    header("Location: http://localhost:1234/php-project/pages/tables/SanPham.php");
  }else{
    if (isset($_POST['Update']))
    {     
      $command1 = "UPDATE `sanpham` SET `TenSP`='$TenSP',`MaNhom`='$MaNhom',`ThuongHieu`='$TH',`MoTa`='$Mota',`AnhSP`='$Anh',`Gia`='$Gia',`SoLuong`= '$SoLuong',`NgayNhap`= CURRENT_TIME WHERE `MaSP` = '$id'";
      if ($conn->query($command1) === TRUE) {
          echo "Sửa thành công!";
          header("Location: http://localhost:1234/php-project/pages/tables/SanPham.php");
      } else {
          echo "Sửa thất bại: " . $conn->error;
      }
    }
  }
?>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="../../admin.php">
          <img src="../../images/logo.svg" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg"
            alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Quản lý sản phẩm</h5>
        <ul class="navbar-nav navbar-nav-right ml-auto">
          <form class="search-form d-none d-md-block" action="#">
            <i class="icon-magnifier"></i>
            <input type="search" class="form-control" placeholder="Search Here" title="Search here">
          </form>
          <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
            <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#"
              data-toggle="dropdown" aria-expanded="false">
              <div class="d-inline-flex mr-3">
                <i class="flag-icon flag-icon-us"></i>
              </div>
              <span class="profile-text font-weight-normal">English</span>
            </a>
            <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
              <a class="dropdown-item">
                <i class="flag-icon flag-icon-us"></i> English </a>
              <a class="dropdown-item">
                <i class="flag-icon flag-icon-vn"></i> Vietnamese </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
            <?php         
            session_start();
            if(isset($_SESSION['user'])){
                echo '<a class="nav-link" id="UserDropdown" href="../samples/logout.php">Logout</a>';                                   
            }else{
                echo '<a class="nav-link" id="UserDropdown" href="../samples/login.php">Login</a>'; 
            }
            ?>                         
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          

          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/SanPham.php">
              <span class="menu-title">Sản phẩm</span>
              <i class="icon-grid menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/DonHang.php">
                <span class="menu-title">Đơn hàng</span>
                <i class="icon-chart menu-icon"></i>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/KhachHang.php">
                <span class="menu-title">Khách hàng</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Chỉnh sửa sản phẩm </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../tables/SanPham.php">Danh sách sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa sản phẩm</li>
              </ol>
            </nav>
          </div>        
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sửa thông tin sản phẩm</h4>
                  <p class="card-description"> Thông tin sản phẩm </p>
                  <form class="forms-sample" method="post">
                    <div class="form-group">  
                      <label for="exampleInputMSP">Mã sản phẩm</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $row[0]; ?>"  name="txtMaSP" placeholder="Mã sản phẩm" disabled>
                    </div>                   
                    <div class="form-group">
                      <label for="exampleInputTSP">Tên sản phẩm</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $row[1]; ?>"  name="txtTenSP" placeholder="Tên sản phẩm" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleSelectMN">Mã nhóm</label>
                      <select class="form-control" id="exampleSelectMN" name="txtMaNhom">
                        <option>CPU</option>
                        <option>GPU</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleSelectTH">Thương hiệu</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $row[3]; ?>"name="txtThuongHieu" required>
                    </div>

                    <div class="form-group">
                      <la bel for="exampleInputMT">Mô tả</la>
                      <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $row[4]; ?>"  name="txtMoTa" placeholder="Mô tả" required>
                    </div>
                    
                    <div class="form-group">
                      <label>File upload</label>
                      <div class="exampleInputMT">Ảnh minh họa:</div>
                      <input type="text" class="form-control" id="exampleInputMT" value="<?php echo $row[5]; ?>" placeholder="Tên File Ảnh" name="txtAnh" required>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputGia">Giá</label>
                      <input class="form-control" id="exampleGia" type="text" value="<?php echo $row[6]; ?>" name="txtGia" placeholder="Money money money" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputGia">Số lượng</label>
                      <input type="text" value="<?php echo $row[7]; ?>" name="txtSoLuong" type="text" class="form-control" id="exampleSL" placeholder="Số lượng" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="Update" >Update</button>
                    <button type="submit" class="btn btn-light" href="../tables/SanPham.php" name="Cancel">Cancel</button>                                   
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                  bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                    href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                    templates</a> from Bootstrapdash.com</span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="../../vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="../../vendors/select2/select2.min.js"></script>
      <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../../js/off-canvas.js"></script>
      <script src="../../js/misc.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="../../js/typeahead.js"></script>
      <script src="../../js/select2.js"></script>
      <!-- End custom js for this page -->
</body>

</html>