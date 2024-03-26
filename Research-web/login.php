<?php

include 'condb.php';


?>
<style>

.center-div {
    text-align: center;

}

.center-form {


    width: 50%;

    margin-top: 30px;
    margin-left: 25%;

}

.form-control {
    margin: 0 auto;
    display: block;
    max-width: 400px;
}

</style>

<body>
    <br>
    <center>
        <h1>
            <font color="blue">เข้าสู่ระบบ</font>
        </h1>
    </center>
    <div class="center-form">


        <form class="form-control" method="POST" action="logincheck.php">
            <div>
                <a href="index.php?P=1&S=2" class="btn btn-outline-primary">นักศึกษา/อาจารย์</a>
                <a href="index.php?P=1&S=5" class="btn btn-outline-warning">เจ้าหน้าที่</a>
            </div>
            <div class="mb-3 mt-3">
                <i class="fas fa-user"></i> <label for="User_name" class="form-label"> Username:</label>
                <input type="Username" class="form-control" id="User_name" placeholder="Enter Username"
                    name="User_name">
            </div>
            <div class="mb-3">
                <i class="fas fa-lock-open"></i> <label for="User_psw" class="form-label">Password:</label>
                <input type="password" class="form-control" id="User_psw" placeholder="Enter password" name="User_psw">
            </div>
            <?php
            if(isset($_GET["error"]) && $_GET["error"] == 1) {
                echo "<div style='color: red;'>ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</div>";
            }
            ?>
            <div class="form-check mb-3">
                <a style="margin-right: 70px;" href="index.php?P=1&S=4">หากยังไม่มีบัญชีคลิกที่นี่</a> <span>
                    <a  href="index.php?P=1&S=8">ลืมรหัสผ่าน</a></span>
            </div>
            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
        </form>

    </div><br><br>
</body>