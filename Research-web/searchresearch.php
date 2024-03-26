<style>
.form-group {
    display: inline-flex;
    align-items: center;

}

.label-text {
    margin-right: 10px;
    margin-left: 20px;

}
</style>

<body><br>


    <center>
        <h1>ค้นหางานวิจัย</h1>
    </center>

    <div class="content">
        <form class="container" action="index_log.php?A=1&B=4" method="POST"><br><br>
            <h3>ใส่ข้อมูลงานวิจัยที่ต้องการค้นหา</h3><br>


            <div class="form-group">
                <label class="label-text">ชื่อเรื่อง</label>
                <input type="text" class="form-control" id="search_term" placeholder="ชื่องานวิจัย" name="search_term"
                    style="width: 350px;">
            </div><span>
                <div class="form-group">
                    <label class="label-text">ปี</label>
                    <select class="form-select" name="search_year" id="search_year">
                        <option>2566</option>
                        <option>2565</option>
                        <option>2564</option>
                        <option>2563</option>
                    </select>
                </div>
            </span><br><br>

            <div class="form-group">
                <label class="label-text">ชื่อนักศึกษา</label>
                <input type="text" class="form-control" id="search_name" placeholder="ชื่อนักศึกษา" name="search_name"
                    style="width: 350px;">
            </div><span>
                <div class="form-group">
                    <label class="label-text"> ชื่ออาจารย์</label>
                    <input type="text" class="form-control" id="teacher_name" placeholder="ชื่ออาจารย์"
                        name="teacher_name" style="width: 350px;">
                </div>
            </span><br><br>


            <button type="submit" class=" label-text btn btn-primary fas fa-search"> ค้นหา</button> <button type="reset"
                class="btn btn-danger fas fa-redo"> ล้างค่า</button>
        </form><br>
        <div class="content-image">
            <img src="img/5.jpg" alt="" style="width: 900px; height: 500px;">
        </div>
    </div><br><br>
</body>