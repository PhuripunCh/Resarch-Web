<?php
include 'condb.php';

// ตั้งค่า charset เพื่อให้ตรงกับฐานข้อมูล
mysqli_set_charset($conn, "utf8mb4");

// ตรวจสอบว่ามีการส่งค่า search_term มาจากฟอร์มค้นหาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_term = isset($_POST['search_term']) ? htmlspecialchars($_POST['search_term']) : '';
    $student_name = isset($_POST['search_name']) ? htmlspecialchars($_POST['search_name']) : '';
    $teacher_name = isset($_POST['teacher_name']) ? htmlspecialchars($_POST['teacher_name']) : '';
    $search_year = isset($_POST['search_term']) ? htmlspecialchars($_POST['search_year']) : '';

    $sqlpub = "SELECT * FROM research WHERE Research_Name LIKE '%" . $search_term . "%' 
    AND Researcher_Name LIKE '%" . $student_name . "%' 
    AND Teacher_name LIKE '%" . $teacher_name . "%'
    AND Research_Year LIKE '%" . $search_year . "%'";
    $resultpub = $conn->query($sqlpub);

    // ตรวจสอบว่ามีข้อมูลที่ค้นหาได้หรือไม่
}
?>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

h1 {
    margin: 0;
}

main {
    padding: 20px;
}

article {
    margin-bottom: 50px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 5px #ccc;
    border-radius: 10px;
}

h2 {
    margin-top: 0;
}

p {
    margin-top: 0;
}

article {
    margin-bottom: 50px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 5px #ccc;
}

.small-box {
    width: 100%;
    /* ปรับขนาดเป็นตามที่คุณต้องการ */
}

.one_third {
    margin: 0 10px;
    /* ปรับเปลี่ยนค่าของเม็ดจุดให้เหมาะสม */
    width: calc((95% - 10px) / 3);
    /* ปรับเปลี่ยนค่าของความกว้างให้เหมาะสม */
}

.back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    display: none;
}

/* ยกเลิกเส้นใต้ของลิงก์ */
a {
    text-transform: none;
    text-decoration: none;
}

/* ยกเลิกเส้นใต้ของหัวเรื่อง */
h1,
h2,
h3,
h4,
h5,
h6 {
    text-decoration: none;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 8px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0069d9;
}

article {
    margin-bottom: 50px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 5px #ccc;
}
.upload-box {
    width: 300px;
    height: 200px;
    border: 2px dashed #ccc;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    margin-bottom: 20px;

}

.upload-box img {
    max-width: 100%;
    max-height: 100%;
}
</style>

<body>
    <div class="container">
        <form action="index_ad.php?A=1&B=3" method="POST">
            <input type="hidden" name="search_term" value="<?php echo $search_term; ?>">
            <br>
            <center>
                <h3>แสดงข้อมูลงานวิจัยที่ค้นหา</h3>
            </center>
                <?php
                    if ($resultpub->num_rows > 0) {
                        while ($row = $resultpub->fetch_assoc()) {
                            // ดำเนินการกับข้อมูลที่ได้จากการค้นหา
                            $Research_ID = $row['Research_ID'];
                            $Research_Name = $row['Research_Name'];
                            $Researcher_Name = $row['Researcher_Name'];
                            $Research_Year = $row['Research_Year'];
                            $Research_Abstract = $row['Research_Abstract'];
                            $Research_File = $row['Research_File'];
                            $Teacher_name = $row['Teacher_name']; 
                            $Research_File = '/Work/Resfile/' . $row['Research_File'];
                            $Research_img = '/Work/uploads/' . $row['Research_img'];
            ?>
            <article>
            <div class="upload-box">
            <img src="<?php echo $Research_img ?>" alt="รูปงานวิจัย">
            </div>
                <h2><?php echo $Research_Name ?></h2>
                <p><strong>Abstract:</strong><?php echo $Research_Abstract ?></p>
                <p><strong>หัวหน้าโครงการ/ผู้ร่วมวิจัย:</strong><?php echo $Researcher_Name ?></p>
                <p><strong>อาจารย์ที่ปรึกษา:</strong><?php echo $Teacher_name ?></p>
                <p><strong>ระยะเวลาในการทำวิจัย:</strong><?php echo $Research_Year ?></p>
                <p><a class="btn btn-success" href="<?php echo $Research_File ?>" download="">ดาวน์โหลดไฟล์ PDF</a></p>
                <a href="index_ad.php?A=1&B=8" class="btn btn-danger">แจ้งปัญหา</a>
            </article>
            <?php
}
} else {
    echo "ไม่พบข้อมูล";
}

        ?>
            <br>
            <center>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary">กลับหน้าค้นหา</button>
                </div><br>
            </center>

        </form>
    </div>

</body>
<?php

?>

