<?php

include 'condb.php';
?>

<style>
<style>body {
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
<div class="container">
    <main>
        <?php
       
          
        $itemsPerPage = 3;

        
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

        
        $offset = ($currentPage - 1) * $itemsPerPage;

       
        $sql = "SELECT * FROM research LIMIT ?, ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $offset, $itemsPerPage);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $Research_ID = $row['Research_ID'];
            $Research_Name = $row['Research_Name'];
            $Researcher_Name = $row['Researcher_Name'];
            $Research_Year = $row['Research_Year'];
            $Research_Abstract = $row['Research_Abstract'];
            $Research_File = '/Work/Resfile/' . $row['Research_File'];
            $Research_img = '/Work/uploads/' . $row['Research_img'];
            $Teacher_name = $row['Teacher_name']; 

            echo '<article>
            <div class="upload-box">
                    
            <img src="'.$Research_img .' " alt="รูปงานวิจัย">
                    
                </div><br>
                  <h2>'. $Research_Name .'</h2>
                  <p><strong>Abstract:</strong>'. $Research_Abstract .'  </p>
                  <p><strong>หัวหน้าโครงการ/ผู้ร่วมวิจัย:</strong>'. $Researcher_Name .'</p>
                  <p><strong>อาจารย์ที่ปรึกษา:</strong>'. $Teacher_name .'</p>
                  <p><strong>ระยะเวลาในการทำวิจัย:</strong>'. $Research_Year .'</p>
                  <p><a class="btn btn-success" href="' . $Research_File . '" download="">ดาวน์โหลดไฟล์ PDF</a></p>
                  <span><a href="index_log.php?A=1&B=8" class="btn btn-danger">แจ้งปัญหา</a></span>
                  
                  </article>';
        }

        $sqlCount = "SELECT COUNT(*) FROM research";
        $resultCount = $conn->query($sqlCount);
        $totalCount = $resultCount->fetch_row()[0];
        $totalPages = ceil($totalCount / $itemsPerPage);


        echo '<ul class="pagination">';
        if ($currentPage > 1) {
            echo '<li class="page-item"><a class="page-link" href="index_log.php?A=1&B=6&page=' . ($currentPage - 1) . '">ย้อนกลับ</a></li>';
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            if ($currentPage == $i) {
                echo '<li class="page-item active"><a class="page-link">' . $i . '</a></li>';
            } else {
                echo '<li class="page-item"><a class="page-link" href="index_log.php?A=1&B=6&page=' . $i . '">' . $i . '</a></li>';
            }
        }
        if ($currentPage < $totalPages) {
            echo '<li class="page-item"><a class="page-link" href="index_log.php?A=1&B=6&page=' . ($currentPage + 1) . '">หน้าถัดไป</a></li>';
        }
        echo '</ul>';
            ?>
    </main>
</div><br>