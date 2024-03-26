
<?php
session_start();
include 'condb.php';

$Re_title = $_POST['Re_title'];
$Re_Res = $_POST['Re_Res'];
$Re_Uname = $_POST['Re_Uname'];
$Re_num = $_POST['Re_num'];
$Re_email = $_POST['Re_email'];
$Redetail = $_POST['Redetail'];



$sql="INSERT INTO report(Re_title,Re_Res,Re_Uname,Re_num,Re_email,Redetail)
VALUES('$Re_title','$Re_Res','$Re_Uname','$Re_num','$Re_email','$Redetail')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('แจ้งปัญหาสำเร็จ'); </script>";
    echo "<script> window.location='index.php?P=1&S=8';</script>";
}else{
    echo "<script> alert('ไม่สามารถแจ้งปัญหาได้โปรดตรวจสอบข้อมูลอีกครั้ง'); </script>";
}
?>