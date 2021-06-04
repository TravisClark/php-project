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
                <i class="flag-icon flag-icon-fr"></i> French </a>
              <a class="dropdown-item">
                <i class="flag-icon flag-icon-ae"></i> Arabic </a>
              <a class="dropdown-item">
                <i class="flag-icon flag-icon-ru"></i> Russian </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle ml-2" src="../../images/faces/face8.jpg" alt="Profile image"> <span
                class="font-weight-normal"> Henry Klein </span></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3">Allen Moreno</p>
                <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span
                  class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item" href="../samples/login.html"><i class="dropdown-item-icon icon-power text-primary"></i>Log out</a>
            </div>
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
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="profile-image">
                <img class="img-xs rounded-circle" src="../../images/faces/face8.jpg" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper">
                <p class="profile-name">Allen Moreno</p>
                <p class="designation">Administrator</p>
              </div>
              <div class="icon-container">
                <i class="icon-bubbles"></i>
                <div class="dot-indicator bg-danger"></div>
              </div>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table.html">
              <span class="menu-title">Sản phẩm</span>
              <i class="icon-grid menu-icon"></i>
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
                <li class="breadcrumb-item"><a href="../tables/basic-table.html">Danh sách sản phẩm</a></li>
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
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputMSP">Mã sản phẩm</label>
                      <input type="text"  class="form-control" id="exampleInputName1" value="<?php echo $row['TenSP']; ?>"  name="ma" placeholder="Mã sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputTSP">Tên sản phẩm</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $row['TenSP']; ?>"  name="ten" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectMN">Mã nhóm</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $row['MaNhom']; ?>" name="maNhom">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectTH">Thương hiệu</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $row['ThuongHieu']; ?>"name="thuongHieu">
                    </div>
                    <div class="form-group">
                      <la bel for="exampleInputMT">Mô tả</la>
                      <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $row['MoTa']; ?>"  name="moTa" placeholder="Mô tả">
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <div class="input-group col-xs-12">
                        <div class="custom-file">
                        <input type="file" value="<?php echo $row['AnhSP']; ?>" name="anh"  class="custom-file-input" id="validatedCustomFile" required>
                          <label class="custom-file-label" for="validatedCustomFile">Chọn ảnh mô tả sản phẩm</label>
                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputGia">Giá</label>
                      <input class="form-control" id="exampleGia" type="text" value="<?php echo $row['gia']; ?>" name="anh" placeholder="Money money money">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputGia">Số lượng</label>
                      <input type="text" value="<?php echo $row['SoLuong']; ?>" name="sl" type="text" class="form-control" id="exampleSL" placeholder="Số lượng">
                    </div>
                    <input type="submit" value="Update" name="update_user" >

                    <button class="btn btn-light">Cancel</button>

                    
                    <?php
                        if (isset($_POST['update_user'])){
                            $ma=@$_POST['ma'];
                            $ten=@$_POST['ten'];
                            $maNhom=@$_POST['maNhom'];
                            $thuongHieu=@$_POST['thuongHieu'];
                            $moTa=@$_POST['moTa'];
                            $anh=@$_POST['anh'];
                            $gia=@$_POST['gia'];
                            $sl=@$_POST['sl'];
                            
                            $sql = "UPDATE `sanpham` SET MaSP='$ma', TenSP='$ten', MaNhom = '$maNhom', ThuongHieu = '$thuongHieu', MoTa = '$moTa', AnhSP='$anh'  ,Gia='$gia', SoLuong='$sl', WHERE MaSP='$ma'";
                            if ($conn->query($sql) === TRUE) {
                            echo "Record updated successfully";
                            } else {
                            echo "Error updating record: " . $conn->error;
                            }
                            $conn->close();
                        }
                    ?>
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