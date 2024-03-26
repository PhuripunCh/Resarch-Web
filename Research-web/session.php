<?php
    session_start();
    $objConnect = mysqli_connect("localhost","root","")or die("Can't connect to database");
    $db = mysqli_select_db($objConnect, "research");
    mysqli_query($objConnect, "SET NAMES utf8");

    if($objConnect->connect_error) {
        die("Connection failed". $conn->connect_error);
    }

    $user_check = $_SESSION['User_name'];

    $strSQL = "SELECT User_name FROM user WHERE User_name = '$user_check'";
    $ses_sql = mysqli_query($objConnect, $strSQL);

    $row = mysqli_fetch_array($ses_sql,$MYSQLI_ASSOC);

    $login_session = $row['User_name'];

    if(!isset($_SESSION['User_name'])){
        header("location:login.php");
        die();
    }
?>