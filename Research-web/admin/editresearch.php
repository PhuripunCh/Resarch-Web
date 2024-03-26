<?php 
include 'condb.php'; 
$idres = $_GET['id'];
$sql = "SELECT * FROM research WHERE Research_ID='$idres' ";
$result = mysqli_query($conn,$sql);
$rs = mysqli_fetch_array($result);
?>

<style>
main {
    padding: 20px;
}

.form-group {
    display: inline-flex;
    align-items: center;
}

.label-text {
    margin-right: 10px;
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

.upload-label {
    margin-bottom: 10px;
}
</style>

<body><br>
    <main>
        <div>
            <form class="container" action="update_res.php" method="POST" enctype="multipart/form-data">
                <h2>แก้ไขข้อมูลงานวิจัย</h2><br>
                <label for="Research_ID">รหัสงานวิจัย</label>
                <div>
                    <input type="text" class="form-control" id="Research_ID" name="Research_ID"
                        VALUE="<?=$rs['Research_ID']?>">
                </div><br>
                <label for="Research_Name">ชื่อเรื่อง</label>
                <div>
                    <input type="text" class="form-control" id="Research_Name" name="Research_Name"
                        VALUE="<?=$rs['Research_Name']?>">
                </div><br>
                <div class="form-group">
                    <label class="label-text">ปีพ.ศ. </label>
                    <input type="text" class="form-control" id="Research_Year" name="Research_Year"
                        VALUE="<?=$rs['Research_Year']?>">
                </div><br><br>
                <div>
                    <label for="Research_Abstract" class="form-label">บทคัดย่อ</label>
                    <textarea style="resize: vertical;" name="Research_Abstract" type="text" id="Research_Abstract"
                        class="form-control" placeholder="บทคัดย่อ"><?=$rs['Research_Abstract']?></textarea>
                </div>
                <label for="Researcher_Name">ชื่อผู้จัดทำ</label>
                <div>
                    <input type="text" class="form-control" id="Researcher_Name" name="Researcher_Name"
                        VALUE="<?=$rs['Researcher_Name']?>">
                </div><br>
                <label for="Teacher_name">ชื่ออาจารย์ที่ปรึกษา</label>
                <div>
                    <input type="text" class="form-control" id="Teacher_name" name="Teacher_name"
                        VALUE="<?=$rs['Teacher_name']?>">
                </div><br>
                <label for="Branch">สาขา</label>
                <div>
                    <input type="text" class="form-control" id="Branch" name="Branch" VALUE="<?=$rs['Branch']?>">
                </div><br>



                <label for="Research_File">ไฟล์วิจัย</label>
                <div>
                    <input type="text" class="form-control" id="Research_File" name="Research_File"
                        value="<?=$rs['Research_File']?>" readonly>
                </div><br>
                <label for="Research_File">อัพโหลดไฟล์วิจัยใหม่</label>
                <div>
                    <input type="file" class="form-control" id="Research_File" name="Research_File" >
                </div><br>
                <div class="upload-box">
                    <label for="new_image" class="upload-label">อัพโหลดรูปภาพ</label>
                    <input type="file" class="form-control" id="new_image" name="new_image" onchange="displayImage(event)">
                    <img id="uploaded-image" class="uploaded-image" src="#" alt="">
                </div><br>

                <button type="submit" class=" label-text btn btn-primary fas fa-upload"> อัพโหลดไฟล์</button> <button
                    type="reset" class="btn btn-danger fas fa-redo" onclick="clearImage()"> ล้างค่า</button>
            </form><br><br>
        </div>
    </main>

    <script>
    function displayImage(event) {
        var selectedFile = event.target.files[0]; 
        var reader = new FileReader();

        var imgElement = document.getElementById("uploaded-image"); 

        reader.onload = function() {
            imgElement.src = reader.result; 
        };

        reader.readAsDataURL(selectedFile); 
    }

    function clearImage() {
        document.getElementById("uploaded-image").src = "#";
    }
    </script>
</body>