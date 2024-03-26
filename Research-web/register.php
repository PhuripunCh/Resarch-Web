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
}
</style>

<body>
    <br>
    <center>
        <h1>
            <font color="blue">สมัครสมาชิก</font>
        </h1>
    </center>
    <div class="center-form">


        <form class="form-control" method="POST" action="insert_User.php">
            <div>
                <button type="button" class="btn btn-primary">นักศึกษา/อาจารย์</button>
                
            </div>
            <div class="mb-3 mt-3">
                <label for="User_name" class="form-label"> Username:</label><span style="color:red"> *</span>
                <input type="Username"   class="form-control" id="User_name" required placeholder="Enter Username"
                    name="User_name">
            </div>
            <div>
                <label>ชื่อ-นามสกุล(ภาษาไทย)</label><span style="color:red"> *</span>
                <div class="form-group">
                    <input style="width: 200px; display: inline-block;" type="text" name="User_Fname"
                        id="User_FnameTH" class="form-control" required placeholder="ชื่อ">
                    <span style="display: inline-block;">-</span>
                    <input style="width: 200px; display: inline-block;" type="text" name="User_Lname"
                        id="User_LnameTH" class="form-control" required placeholder="นามสกุล">
                </div>
            </div>
            <div>
                <label for="email">อีเมล</label><span style="color:red"> *</span>
                <input type="text" class="form-control" id="email" required placeholder="อีเมล"
                    name="email">
            </div>
            <div>
                <label for="">รหัสนักศึกษา</label><span style="color:red"> *</span>
                <input type="text" class="form-control" id="num_std" required placeholder="รหัสนักศึกษา"
                    name="num_std">
            </div>
            <div class="mb-3">
                <label for="User_psw" class="form-label">Password:</label><span style="color:red"> *</span>
                <input type="password" class="form-control" id="User_psw" required placeholder="Enter password" name="User_psw">
            </div>
            
            <button type="submit" class="btn btn-primary">ยืนยัน</button>
            <button type="reset" class="btn btn-danger">ล้างค่า</button>
        </form>

    </div><br><br>











</body>