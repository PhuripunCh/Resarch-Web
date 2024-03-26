<?php
session_start();
include 'condb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["User_name"]);
    $password = mysqli_real_escape_string($conn, $_POST["User_psw"]);

    $sql = "SELECT * FROM user WHERE User_name = '$username' AND User_psw = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["User_ID"] = $row["User_ID"];
        $_SESSION["User_name"] = $row["User_name"];

        if ($row["status"] == "USER") {
            header("Location: index_log.php");
        } 
        exit();
    } else {
        // ถ้าไม่พบข้อมูลผู้ใช้, ส่งข้อความผิดพลาดกลับไปที่หน้าเข้าสู่ระบบ
        header("Location: index.php?P=1&S=2&error=1");
        exit();
    }
}
?>