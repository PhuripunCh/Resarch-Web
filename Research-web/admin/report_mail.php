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
    border: 2px solid black;
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

.red-text {
    color: red;
}
</style>

<body>
    <br>
    <center>
        <h1>กล่องแจ้งปัญหา</h1>
    </center><br>
    <div class="container">
        <?php
       

   $itemsPerPage = 10;

   $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

   $offset = ($currentPage - 1) * $itemsPerPage;

   $sql = "SELECT * FROM report LIMIT ?, ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("ii", $offset, $itemsPerPage);
   $stmt->execute();
   $result = $stmt->get_result();
   $number = $offset + 1;
   
   while ($row = $result->fetch_assoc()) {
    $Report_ID = $row['Report_ID'];
    $Re_title = $row['Re_title'];
    $Re_Res = $row['Re_Res'];
    $Re_Uname = $row['Re_Uname'];
    $Re_num = $row['Re_num'];
    $Re_email = $row['Re_email'];
    $Redetail = $row['Redetail'];
       ?>

        <article>
            <h1><?php echo $number ?>.</h1>
            <div style="display: flex; flex-wrap: wrap; align-items: center;">

                <label for="Re_title" style="margin-bottom: 10px;"><strong>หัวข้อ:</strong></label>
                <input type="text" class="form-control" style="width: 200px; margin-right: 10px; margin-bottom: 10px;"
                    id="Re_title" name="Re_title" VALUE="<?=$row['Re_title']?>" readonly>

                <label for="Re_Res" style="margin-bottom: 10px;"><strong>ชื่อเอกสาร:</strong></label>
                <input type="text" class="form-control" style="width: 900px; margin-right: 10px; margin-bottom: 10px;"
                    id="Re_Res" name="Re_Res" VALUE="<?=$row['Re_Res']?>" readonly>

                <label for="Re_Uname" style="margin-bottom: 10px;"><strong>ผู้แจ้ง:</strong></label>
                <input type="text" class="form-control" style="width: 200px; margin-right: 10px; margin-bottom: 10px;"
                    id="Re_Uname" name="Re_Uname" VALUE="<?=$row['Re_Uname']?>" readonly>

                <label for="Re_num" style="margin-bottom: 10px;"><strong>รหัสนักศึกษา:</strong></label>
                <input type="text" class="form-control" style="width: 200px; margin-right: 10px; margin-bottom: 10px;"
                    id="Re_num" name="Re_num" VALUE="<?=$row['Re_num']?>" readonly>

                <label for="Re_email" style="margin-bottom: 10px;"><strong>อีเมล:</strong></label>
                <input type="text" class="form-control" style="width: 300px; margin-right: 10px; margin-bottom: 10px;"
                    id="Re_email" name="Re_email" VALUE="<?=$row['Re_email']?>" readonly>



            </div>
            <label for="Redetail"
                style="margin-bottom: 10px; display: inline-block;"><strong>รายละเอียด:</strong></label>
            <textarea class="form-control" id="Redetail" name="Redetail" rows="5" style="margin-bottom: 10px;"
                placeholder="รายละเอียด" readonly><?=$row['Redetail']?></textarea>

            <form action="Checkre.php" method="POST">
 
                <input type="hidden" name="Report_ID" value="<?php echo $Report_ID ?>">

                <div style="display: flex; flex-wrap: wrap; align-items: center;">

                    <label for="Check">แก้ไขแล้ว</label>

                    <input style="margin-right: 10px;" type="checkbox" name="Stat" id="Stat" value="CHECK"
                        <?php if ($row['Stat'] == 'CHECK') echo 'checked'; ?>>

                    <button style="margin-right: 10px; " class="btn btn-success" type="submit">บันทึก</button>
                    <p class="red-text" style="margin-right: 10px; margin-bottom: 5px;">*กรุณากดบันทึกหลังจากติ๊กถูกแล้ว*</p>

                </div>




            </form>
            <a style="align-items: right;" href="delete_report.php" class="delete-button btn btn-danger"
                data-user-id="<?php echo $Report_ID ?>"> ลบข้อมูล</a>

        </article>



        <?php
         $number++;
                }

                $sqlCount = "SELECT COUNT(*) FROM report";
                $resultCount = $conn->query($sqlCount);
                $totalCount = $resultCount->fetch_row()[0];
                $totalPages = ceil($totalCount / $itemsPerPage);
        
                echo '<ul class="pagination">';
                    if ($currentPage > 1) {
                    echo '<li class="page-item"><a class="page-link"
                            href="index_ad.php?A=1&B=10&page=' . ($currentPage - 1) . '">ย้อนกลับ</a></li>';
                    }
                    for ($i = 1; $i <= $totalPages; $i++) { if ($currentPage==$i) {
                        echo '<li class="page-item active"><a class="page-link">' . $i . '</a></li>' ; } else {
                        echo '<li class="page-item"><a class="page-link" href="index_ad.php?A=1&B=10&page=' . $i . '">' . $i
                        . '</a></li>' ; } } if ($currentPage < $totalPages) {
                        echo '<li class="page-item"><a class="page-link" href="index_ad.php?A=1&B=10&page=' . ($currentPage + 1)
                        . '">หน้าถัดไป</a></li>' ; 
                        } 
                        echo '</ul>' ; ?>

    </div>

    <script>

    const deleteButtons = document.querySelectorAll('.delete-button');


    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            const report_ID = button.getAttribute('data-user-id');
            const confirmDelete = confirm("คุณต้องการลบข้อมูลนี้ใช่หรือไม่?");

            if (confirmDelete) {

                fetch('delete_report.php', {
                        method: 'POST',
                        body: JSON.stringify({
                            Report_ID: report_ID
                        }),
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('ลบข้อมูลเรียบร้อยแล้ว');
                            window.location.reload(); 
                        } else {
                            alert('ไม่สามารถลบข้อมูลได้');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        });
    });
    </script>
</body>