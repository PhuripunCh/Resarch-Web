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
        <form action="addreport.php" method="POST">
            <div class="form-group">
                <label for="status" class="col-md-2 control-label">ประเภทผู้ใช้ :</label>
                <div class="col-md-5">
                    <select class="form-control" id="status" name="status">
                        <option value="1">นักศึกษา</option>
                        <option value="2">อาจารย์ / นักวิจัย</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="Re_title" class="col-md-2 control-label">หัวเรื่อง :</label>
                <div class="col-md-5">
                    <input class="form-control" id="Re_title" name="Re_title" placeholder="หัวเรื่อง" type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="Re_Uname" class="col-md-2 control-label">ผู้แจ้ง :</label>
                <div class="col-md-5">
                    <input class="form-control" id="Re_Uname" name="Re_Uname" placeholder="ผู้แจ้ง" value=""
                        type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="Re_email" class="col-md-2 control-label">อีเมล :</label>
                <div class="col-md-5">
                    <input class="form-control" id="Re_email" name="Re_email" placeholder="อีเมล" value="" type="email">
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
                <label for="detail" class="col-md-2 control-label"></label>
                <div class="col-md-5">
                    <div class="alert alert-danger">
                        <span class="fs13">
                            หากไม่พบอีเมลใน inbox โปรดตรวจสอบ junk mail ของท่านอีกครั้ง </span>
                    </div>
                </div>
            </div>

            <div class="form-group">

                <div class="col-md-5 col-md-offset-2">


                    <br>
                    <button type="submit" class="btn btn-xl btn-success">
                        แจ้งปัญหา </button>
                </div>

            </div><br>
        </form>
    </div>
</body>