<?php
include("connec.php");
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

        echo "Thêm sản phẩm laptop thành công!.";

    } else{

        echo "Không thể chạy câu lệnh $sql. " . mysqli_error($conn);

    }
    mysqli_close($conn);
?>