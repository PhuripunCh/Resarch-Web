<style>
.center-form {
    width: 80%;
    margin-top: 10px;
    margin-left: 30%;

}
</style>

<body>
    <div class="center-form">
        <h1>แจ้งปัญหา</h1>
        <form action="addreportlogin.php" method="POST"> 
            <div class="form-group">
                <label for="Re_title" class="col-md-2 control-label">หัวข้อ :</label>
                <div class="col-md-5">
                    <select class="form-control" id="Re_title" name="Re_title">
                        <option value="ปัญหาด้าน User">ปัญหาด้าน User</option>
                        <option value="แก้ไขเอกสาร">แก้ไขเอกสาร</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="Re_Res" class="col-md-2 control-label">ชื่อเอกสาร :</label>
                <div class="col-md-5">
                    <input class="form-control" id="Re_Res" name="Re_Res" placeholder="หัวเรื่อง" type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="Re_Uname" class="col-md-2 control-label">ผู้แจ้ง :</label>
                <div class="col-md-5">
                    <input class="form-control" id="Re_Uname" name="Re_Uname" placeholder="ผู้แจ้ง" 
                        type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="Re_num" class="col-md-2 control-label">รหัสนักศึกษา :</label>
                <div class="col-md-5">
                    <input class="form-control" id="Re_num" name="Re_num" placeholder="รหัสนักศึกษา" 
                        type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="Re_email" class="col-md-2 control-label">อีเมล :</label>
                <div class="col-md-5">
                    <input class="form-control" id="Re_email" name="Re_email" placeholder="อีเมล"  type="email">
                </div>
            </div>
            <div class="form-group">
                <label for="Redetail" class="col-md-2 control-label">รายละเอียด :</label>
                <div class="col-md-5">
                    <textarea class="form-control" id="Redetail" name="Redetail" rows="5"
                        placeholder="รายละเอียด"></textarea>
                </div>
            </div>


            <div class="form-group">

                <div class="col-md-5 col-md-offset-2">

                    <br>
                    <button type="submit" class="btn btn-xl btn-success">
                        แจ้งปัญหา </button>
                    <button type="reset" class="btn btn-xl btn-danger "> ล้างค่า</button>
                </div>

            </div><br>
        </form>
    </div>
</body>