<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'condb.php';


    $reportID = $_POST["Report_ID"];
    $isChecked = isset($_POST["Stat"]) ? 'CHECK' : 'NON';

 
    
    $sql = "UPDATE report SET Stat='$isChecked' WHERE Report_ID='$reportID'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script> alert('อัปเดตข้อมูลเรียบร้อยแล้ว'); </script>";
        echo "<script> window.location='index_ad.php?A=1&B=10';</script>";
    } else {
        echo "<script> alert('เกิดข้อผิดพลาดในการอัปเดตข้อมูล'); </script>";
    }
}
?>



