<?php 
include 'condb.php'; 
$iduser = $_GET['id'];
$sql = "SELECT * FROM user WHERE User_ID='$iduser' ";
$result = mysqli_query($conn,$sql);
$us = mysqli_fetch_array($result);
?>
<style>
label {
    text-align: right;

}
</style>

<body>
    <main>
        <center class="center-content">
            <div class="form-control">
                <form class="container" action="update_user.php" method="POST" enctype="multipart/form-data">
                    <h2>แก้ไขข้อมูลผู้ใช้</h2><br>

                    <div>
                        <label for="User_ID"><strong>รหัสผู้ใช้งาน</strong></label>
                        <input type="text" style="width: 300px;" class="form-control" id="User_ID" name="User_ID"
                            VALUE="<?=$us['User_ID']?>">
                    </div><br>

                    <div>
                        <label for="User_name"><strong>ชื่อผู้ใช้/Username</strong></label>
                        <input type="text" style="width: 300px;" class="form-control" id="User_name" name="User_name"
                            VALUE="<?=$us['User_name']?>">
                    </div><br>

                    <div>
                        <label for="User_psw" class="label-text"><strong>รหัสผ่าน/Password</strong></label>
                        <input type="text" style="width: 300px;" class="form-control" id="User_psw" name="User_psw"
                            VALUE="<?=$us['User_psw']?>">
                    </div><br>

                    <div>
                        <label for="num_std" class="form-label"><strong>รหัสนักศึกษา</strong></label>
                        <input type="text" style="width: 300px;" class="form-control" id="num_std" name="num_std"
                            VALUE="<?=$us['num_std']?>">
                    </div><br>

                    <div>
                        <label for="User_Fname"><strong>ชื่อ</strong></label>
                        <input type="text" style="width: 300px;" class="form-control" id="User_Fname" name="User_Fname"
                            VALUE="<?=$us['User_Fname']?>">
                    </div><br>

                    <div>
                        <label for="User_Fname"><strong>นามสกุล</strong></label>
                        <input type="text" style="width: 300px;" class="form-control" id="User_Lname" name="User_Lname"
                            VALUE="<?=$us['User_Lname']?>">
                    </div><br>

                    <div>
                        <label for="email"><strong>อีเมล</strong></label>
                        <input type="text" style="width: 300px;" class="form-control" id="email" name="email"
                            VALUE="<?=$us['email']?>">
                    </div><br>

                    <div>
                        <label for="status"><strong>สถานะ</strong></label><br>

                        <input type="radio" name="status" value="USER"
                            <?php if ($us['status'] == 'USER') echo 'checked'; ?>> USER
                       <strong>/</strong>   <input type="radio" name="status" value="ADMIN"
                            <?php if ($us['status'] == 'ADMIN') echo 'checked'; ?>> ADMIN
                    </div><br>

                    <button type="submit" class=" label-text btn btn-primary fas fa-upload"> แก้ไขข้อมูลผู้ใช้</button>
                    <button type="reset" class="btn btn-danger fas fa-redo"> ล้างค่า</button>
                </form><br><br>
            </div>
        </center>
    </main>
</body>