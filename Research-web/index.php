<?php
$P      = @@$_REQUEST['P'];
$S      = @@$_REQUEST['S'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/stylenav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    
    .content {
        display: flex;
        justify-content: space-between;
        align-items: center;
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

    .content-image img {
        max-width: 100%;
        height: auto;
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

    .container {
        max-width: 1500px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .login-button:hover {
        background-color: #0056b3;
        
    }

    .signup-button:hover {
        background-color: #007519;
        
    }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">
                <i class=""><img src="img/5.png" alt="" width="280px" height="110px"></i> <!-- ใช้ FontAwesome ไอคอน -->

            </a>
            <ul class="nav-links">
                <li><a href="index.php"><i class="fas fa-home"></i> หน้าแรก</a></li>
                <li><a href="index.php?P=1&S=3"><i class="fas fa-clipboard-list"></i> งานวิจัย</a></li>
                <li><a href="index.php?P=1&S=6"><i class="fas fa-info-circle"></i> คู่มือการเข้าสู่ระบบ</a></li>
                <li><a href="index.php?P=1&S=7"><i class="fas fa-comments"></i> คำถามที่พบบ่อยๆ</a></li>
                <li><a href="index.php?P=1&S=8"><i class="fas fa-exclamation-triangle"></i> แจ้งปัญหา/ติดต่อทีมงาน</a>
                </li>
            </ul>
            <div class="user-actions">
                <a href="index.php?P=1&S=2" class="login-button"><<i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ</a>

                <a href="index.php?P=1&S=4" class="signup-button"><i class="fas fa-user-plus"></i> สมัครสามาชิก</a>
            </div>
        </div>
    </nav>




    <?php
if ($P == "1") {
  if ($S == "1") {
    $PageContant = "show1.php";
  } else if ($S == "2") {
    $PageContant = "login.php";
  } else if ($S == "3") {
    $PageContant = "main2.php";
  } else if ($S == "4") {
    $PageContant = "register.php";
  } else if ($S == "5") {
    $PageContant = "loginadmin.php";
  } else if ($S == "6") {
    $PageContant = "loginguide.php";
  } else if ($S == "7") {
    $PageContant = "question.php";
  } else if ($S == "8") {
    $PageContant = "report.php";

  } else {
    $PageContant = "show1.php";
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
                        <img src="img/3.1.png" alt="Your Logo">
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