<?php
session_start();
include 'condb.php';

$User_name = $_POST['User_name'];
$User_psw = $_POST['User_psw'];
$num_std = $_POST['num_std'];
$User_Fname = $_POST['User_Fname'];
$User_Lname = $_POST['User_Lname'];
$email = $_POST['email'];

$sql="INSERT INTO user(User_name,User_psw,num_std,User_Fname,User_Lname,email)
VALUES('$User_name','$User_psw','$num_std','$User_Fname','$User_Lname','$email')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('สมัครสมาชิกสำเร็จ'); </script>";
    echo "<script> window.location='index.php?P=1&S=2';</script>";
}else{
    echo "<script> alert('ไม่สามารถสมัครสมาชิกได้โปรดตรวจสอบข้อมูลอีกครั้ง'); </script>";
}
?>
