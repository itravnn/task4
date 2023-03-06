<?php
include('connect.php');
$username   = ($_POST['txtUsername']);
$password   = ($_POST['txtPassword']);
$email      = ($_POST['txtEmail']);
$sex        = ($_POST['txtSex']);
if(!empty($username) && !empty($password) && !empty($email) && !empty($sex)) {
    $sql = "INSERT INTO `tbl_user` (`username`, `password`, `email`, `sex`) VALUES('$username', '$password', '$email', '$sex')";
    
    if($conn->query($sql)==TRUE){
        echo "Lưu dữ liệu thành công.";
    }else{
        echo "Lỗi {$sql}".$conn->error;
    }
}
else {
    echo "Bạn cần đăng nhập đầy đủ thông tin.";
}
?>