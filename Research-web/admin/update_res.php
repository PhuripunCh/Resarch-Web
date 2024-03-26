<?php
include 'condb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Research_ID = $_POST['Research_ID'];
    $Research_Name = $_POST['Research_Name'];
    $Research_Year = $_POST['Research_Year'];
    $Research_Abstract = $_POST['Research_Abstract'];
    $Researcher_Name = $_POST['Researcher_Name'];
    $Teacher_name = $_POST['Teacher_name'];
    $Branch = $_POST['Branch'];


    if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
        $new_image_name = 'img_' . uniqid() . "." . pathinfo(basename($_FILES['new_image']['name']), PATHINFO_EXTENSION);
        $image_upload_path = "../uploads/" . $new_image_name;

        if (move_uploaded_file($_FILES['new_image']['tmp_name'], $image_upload_path)) {
            $sql_image = "UPDATE research SET Research_img = '$image_upload_path' WHERE Research_ID = '$Research_ID'";
            $result_image = mysqli_query($conn, $sql_image);

            if ($result_image) {
                echo "<script> alert('อัพโหลดรูปภาพใหม่เรียบร้อย'); </script>";
                echo "<script> window.location='index_ad.php?A=1&B=6';</script>";
            } else {
                echo "<script> alert('ไม่สามารถอัพโหลดรูปภาพใหม่ได้'); </script>";
            }
        } else {
            echo "<script> alert('เกิดข้อผิดพลาดในการอัพโหลดรูปภาพ'); </script>";
        }
    }


    if (isset($_FILES['Research_File']) && $_FILES['Research_File']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['Research_File']['tmp_name'];
        $file_name = $_FILES['Research_File']['name'];
        $file_path = "../Resfile/" . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {

            $sql_file = "UPDATE research SET 
                    Research_Name = '$Research_Name',
                    Researcher_Name = '$Researcher_Name',
                    Research_Year = '$Research_Year',
                    Research_Abstract = '$Research_Abstract',
                    Research_File = '$file_path',
                    Teacher_name = '$Teacher_name',
                    Branch = '$Branch'
                    WHERE Research_ID = '$Research_ID'";

            $result_file = mysqli_query($conn, $sql_file);

            if ($result_file) {
                echo "<script> alert('อัพโหลดไฟล์ใหม่เรียบร้อย'); </script>";
                echo "<script> window.location='index_ad.php?A=1&B=6';</script>";
            } else {
                echo "<script> alert('ไม่สามารถอัพโหลดไฟล์ใหม่ได้'); </script>";
            }
        } else {
            echo "<script> alert('เกิดข้อผิดพลาดในการอัพโหลดไฟล์'); </script>";
        }
    } else {

        $sql = "UPDATE research SET 
                Research_Name = '$Research_Name',
                Researcher_Name = '$Researcher_Name',
                Research_Year = '$Research_Year',
                Research_Abstract = '$Research_Abstract',
                Teacher_name = '$Teacher_name',
                Branch = '$Branch'
                WHERE Research_ID = '$Research_ID'";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script> alert('แก้ไขข้อมูลงานวิจัยเรียบร้อย'); </script>";
            echo "<script> window.location='index_ad.php?A=1&B=6';</script>";
        } else {
            echo "<script> alert('ไม่สามารถแก้ไขข้อมูลงานวิจัยได้'); </script>";
        }
    }
}
?>