<?php
session_start();
include 'condb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Research_Name = $_POST["Research_Name"];
    $Research_Year = $_POST["Research_Year"];
    $Researcher_Name = $_POST["Researcher_Name"];
    $Teacher_name = $_POST["Teacher_name"];
    $Branch = $_POST["Branch"];
    $Research_Abstract = $_POST["Research_Abstract"];

    if (isset($_FILES['Research_File']) && $_FILES['Research_File']['error'] === UPLOAD_ERR_OK) {
        $new_file_name = basename($_FILES['Research_File']['name']);
        $file_upload_path = "Resfile/" . $new_file_name;
        move_uploaded_file($_FILES['Research_File']['tmp_name'], $file_upload_path);
    } else {
        $new_file_name = "";
    }


    if (isset($_FILES['file1']) && $_FILES['file1']['error'] === UPLOAD_ERR_OK) {
        $new_image_name = 'img_' . uniqid() . '.' . pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
        $image_upload_path = "uploads/" . $new_image_name;
        move_uploaded_file($_FILES['file1']['tmp_name'], $image_upload_path);
    } else {
        $new_image_name = "";
    }


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO research (Research_Name, Research_Year, Researcher_Name, Teacher_name, Branch, Research_Abstract, Research_img, Research_File) 
            VALUES ('$Research_Name', '$Research_Year', '$Researcher_Name', '$Teacher_name', '$Branch', '$Research_Abstract', '$new_image_name', '$new_file_name')";

 
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('อัพโหลดสำเร็จ');</script>";
        echo "<script> window.location='index_log.php?A=1&B=6';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>
