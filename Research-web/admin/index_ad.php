<?php
session_start();
include 'condb.php';
$A     = @@$_REQUEST['A'];
$B      = @@$_REQUEST['B'];
if(isset($_SESSION['User_ID'])){

  $user_id = $_SESSION['User_ID'];
} else {
  echo 'ยังไม่ได้เข้าสู่ระบบ'; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="../js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/stylenav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    .content {
        display: flex;
        justify-content: space-between;

        margin-top: 20px;
    }

    .content-text {
        flex: 1;

    }

    .content-image {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-right: 20px;
    }

    .content-text {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .content-text h2,
    .content-text p {
        margin: 10px 0;
    }

    .carousel-inner img {
        width: 100%;
        height: auto;
    }

    .nav-links li a {
        text-decoration: none;
        transition: color 0.3s;
    }

    .nav-links li a:hover {
        color: #FF0000;
    }

    .large-container {
        max-width: 1500px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    </style>
</head>

<body>
    <?php
    $sql    = "SELECT * FROM user WHERE User_ID = '{$_SESSION['User_ID']}'";
    $result = mysqli_query($conn,$sql);
    $stmt = $conn->prepare($sql);
 
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $User_ID = $row['User_ID'];
    $User_name = $row['User_name'];
    $num_std = $row['num_std'];
    $User_psw = $row['User_psw'];
    $User_Fname = $row['User_Fname'];
    $User_Lname = $row['User_Lname'];
    $email = $row['email'];
  ?>
    <nav class="navbar">
        <div class="large-container">
            <a href="#" class="logo">
                <i class=""><img src="../img/5.png" alt="" width="280px" height="110px"></i>
                <!-- ใช้ FontAwesome ไอคอน -->

            </a>
            <ul class="nav-links">
                <li><a href="index_ad.php"><i class="fas fa-home"></i> หน้าแรก</a></li>
                <li><a href="index_ad.php?A=1&B=6"><i class="fas fa-clipboard-list"></i> งานวิจัย</a></li>
                <li><a href="index_ad.php?A=1&B=3"><i class="fas fa-search"></i> ค้นหา</a></li>
                <li><a href="index_ad.php?A=1&B=7"><i class="fas fa-clipboard"></i> ยูเซอร์ทั้งหมด</a></li>
                <li><a href="index_ad.php?A=1&B=10"><i class="fas fa-exclamation-circle"></i> แจ้งปัญหา</a></li>
            </ul>
            <div class="user-actions">
                <div class="container-fluid">

                    <!-- Button to Open the Modal -->

                    <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#myModal">
                        <img src="../img/Usericon2.png" alt="Avatar Logo" data-bs-toggle="modal"
                            data-bs-target="#myModal" style="width:40px;" class="rounded-pill"> <span
                            style="color: white;"><?php echo $User_name ?></span>
                    </a>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header text-dark">
                                    <h4 class="modal-title">ข้อมูลผู้ใช้</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-dark">
                                    <div>
                                        <label for="">ชื่อผู้ใช้</label>
                                        <p class="form-control"><?php echo $User_name ?> </p>
                                    </div>
                                    <div>
                                        <label for="">ชื่อ</label>
                                        <p class="form-control" style="width: 200px;"><?php echo $User_Fname ?> </p>
                                        <span style="display: inline-block;"><label for="">นามสกุล</label></span>
                                        <p class="form-control" style="width: 200px;"><?php echo $User_Lname ?> </p>
                                    </div>
                                    <div>
                                        <label for="">อีเมล</label>
                                        <p class="form-control"><?php echo $email ?> </p>
                                    </div>
                                    <div>
                                        <label for="">รหัสนักศึกษา</label>
                                        <p class="form-control"><?php echo $num_std ?> </p>
                                    </div>

                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <a href="index_ad.php?A=1&B=8&id=<?php echo $User_ID ?>"
                                        class="btn btn-warning">แก้ไขข้อมูล</a>
                                    <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal">ปิดหน้านี้</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="../logout.php" method="post">
                <button type="submit" name="logout" class="btn btn-danger">ออกจากระบบ</button>
            </form>
        </div>
    </nav>




    <?php
if ($A == "1") {
  if ($B == "1") {
    $PageContant = "show1.php";
  } else if ($B == "2") {
    $PageContant = "login.php";
  } else if ($B == "3") {
    $PageContant = "searchresearch.php";
  } else if ($B == "4") {
    $PageContant = "search1.php";
  } else if ($B == "5") {
    $PageContant = "editresearch.php";
  } else if ($B == "6") {
    $PageContant = "main1.php";
  } else if ($B == "7") {
    $PageContant = "userdetail.php";
  } else if ($B == "8") {
    $PageContant = "edituser.php";
  } else if ($B == "9") {
    $PageContant = "search2.php";
  } else if ($B == "10") {
    $PageContant = "report_mail.php";
  } 

} else {
  $PageContant = "show1.php";
}
?>

    <?php include $PageContant;  ?>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <a href="#" class="logo">
                        <img src="../img/3.1.png" alt="Your Logo">
                    </a><br>
                </div>
                <div class="footer-links">
                    <p>มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี</p>
                    <p>Rajamangala University of Technology Thanyaburi </p>
                    <p>ที่อยู่ : 39 หมู่ที่ 1 ตำบลคลองหก อำเภอคลองหลวง</p>
                    <p>จังหวัดปทุมธานี 12110</p>
                    <p>เบอร์โทรติดต่อ: 02 549 4990</p>

                </div>
            </div>
            <div class="footer-social">

            </div>
        </div>
    </footer>
</body>

</html>