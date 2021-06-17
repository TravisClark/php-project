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

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="../../index.html">
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
          
          <!--
          <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../index.html">
              <span class="menu-title">Dashboard</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Basic UI Elements</span>
              <i class="icon-layers menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/simple-line-icons.html">
              <span class="menu-title">Icons</span>
              <i class="icon-globe menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <span class="menu-title">Form Elements</span>
              <i class="icon-book-open menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/charts/chartist.html">
              <span class="menu-title">Charts</span>
              <i class="icon-chart menu-icon"></i>
            </a>
          </li> -->
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
          <!-- 
          <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">General Pages</span>
              <i class="icon-doc menu-icon"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item pro-upgrade">
            <span class="nav-link">
              <a class="btn btn-block px-0 btn-rounded btn-upgrade"
                href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i
                  class="icon-badge mx-2"></i> Upgrade to Pro</a>
            </span>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Tạo sản phẩm mới </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../tables/basic-table.html">Danh sách sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tạo sản phẩm mới</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <?php            
              include("connec.php");
              if(isset($_POST['Create'])){
                $MaSP = mysqli_real_escape_string($conn, $_REQUEST['txtMaSP']);
                $TenSP = mysqli_real_escape_string($conn, $_REQUEST['txtTenSP']);
                $MaNhom = mysqli_real_escape_string($conn, $_REQUEST['txtMaNhom']);
                $TH = mysqli_real_escape_string($conn, $_REQUEST['txtThuongHieu']);
                $Mota = mysqli_real_escape_string($conn, $_REQUEST['txtMoTa']);
                $Anh = mysqli_real_escape_string($conn, $_REQUEST['txtAnh']);
                $Gia = mysqli_real_escape_string($conn, $_REQUEST['txtGia']);
                $SoLuong = mysqli_real_escape_string($conn, $_REQUEST['txtSoLuong']);
                $sql = "INSERT INTO `sanpham`(`MaSP`, `TenSP`, `MaNhom`, `ThuongHieu`, `MoTa`, `AnhSP`, `Gia`, `SoLuong`) 
                          VALUES ('$MaSP','$TenSP','$MaNhom','$TH','$Mota','$Anh',$Gia,$SoLuong)";
                  
                  if(mysqli_query($conn, $sql)){

                      echo "Thêm sản phẩm thành công!.";

                  } else{

                      echo "Không thể chạy câu lệnh $sql. " . mysqli_error($conn);
                }
                mysqli_close($conn);
              }             
            ?>

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tạo sản phẩm</h4>
                  <form class="forms-sample" name="frm" method="post">
                    <div class="form-group">
                      <label for="exampleInputMSP">Mã sản phẩm</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Mã sản phẩm" name="txtMaSP">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputTSP">Tên sản phẩm</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Tên sản phẩm" name="txtTenSP">
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
                      <input type="text" class="form-control" id="exampleInputEmail3" name="txtThuongHieu">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputMT">Mô tả</label>
                      <input type="text" class="form-control" id="exampleInputMT" placeholder="Mô tả" name="txtMoTa">
                    </div>

                    <div class="form-group">
                      <label>File upload</label>
                      <div class="exampleInputMT">Ảnh minh họa:</div>
                      <input type="text" class="form-control" id="exampleInputMT" placeholder="Tên File Ảnh" name="txtAnh">
                    </div>
                          
                    <div class="form-group">
                      <label for="exampleInputGia">Giá</label>
                      <input type="text" class="form-control" id="exampleGia" placeholder="Money money money" name="txtGia">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputGia">Số lượng</label>
                      <input type="text" class="form-control" id="exampleSL" placeholder="Số lượng" name="txtSoLuong">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="Create" >Tạo</button>
                    <button class="btn btn-light" >Cancel</button>
                  </form>
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