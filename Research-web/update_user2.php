<?php
include 'condb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $User_ID = $_POST['User_ID'];
    $User_name = $_POST['User_name'];
    $User_psw = $_POST['User_psw'];
    $num_std = $_POST['num_std'];
    $User_Fname = $_POST['User_Fname'];
    $User_Lname = $_POST['User_Lname'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    $sql = "UPDATE user SET 
            User_name = '$User_name',
            User_psw = '$User_psw',
            num_std = '$num_std',
            User_Fname = '$User_Fname',
            User_Lname = '$User_Lname',
            email = '$email',
            status = '$status'
            WHERE User_ID = '$User_ID'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script> alert('แก้ไขข้อมูลผู้ใช้เรียบร้อย'); </script>";
        echo "<script> window.location='index_log.php?A=1&B=1';</script>";
    } else {
        echo "<script> alert('ไม่สามารถแก้ไขข้อมูลผู้ใช้ได้'); </script>";
    }
}
?>