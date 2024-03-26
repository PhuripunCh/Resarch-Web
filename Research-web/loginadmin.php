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
            <font color="blue">เข้าสู่ระบบสำหรับเจ้าหน้าที่</font>
        </h1>
    </center>
    <div class="center-form">


        <form class="form-control" method="POST" action="logincheckad.php">
            <div>
                <a href="index.php?P=1&S=2" class="btn btn-outline-primary">นักศึกษา/อาจารย์</a>
                <a href="index.php?P=1&S=5" class="btn btn-outline-warning">เจ้าหน้าที่</a>
            </div>
            <div class="mb-3 mt-3">
                <i class="fas fa-user"></i> <label for="User_name" class="form-label"> IDname:</label>
                <input type="Username" class="form-control" id="User_name" placeholder="Enter Username"
                    name="User_name">
            </div>
            <div class="mb-3">
                <i class="fas fa-lock-open"></i> <label for="User_psw" class="form-label">Password:</label>
                <input type="password" class="form-control" id="User_psw" placeholder="Enter password" name="User_psw">
            </div>

            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
        </form>

    </div><br><br>
</body>