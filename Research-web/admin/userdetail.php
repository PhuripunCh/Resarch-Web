<?php
include 'condb.php';
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

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f6f5f5;
}

table th {
    color: black;
}

tr:hover td {
    background-color: #dcdcdc;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    text-align: center;
    padding: 8px;
    border: 1px solid black;
}
</style>

<body>
    <div class="container">
        <main>
            <h1><strong>ยูเซอร์ทั้งหมด</strong></h1><br>
            <form class="container" action="index_ad.php?A=1&B=9" method="POST" style="display: flex; flex-wrap: wrap; align-items: center;">
                <label for="search_num"><strong>รหัสนักศึกษา:</strong></label>
                <input type="text" class="form-control" id="search_num" placeholder="รหัสนักศึกษา" name="search_num"
                    style="width: 200px; margin-right: 10px;">
                <label for="search_fname"><strong>ชื่อ:</strong></label>
                <input type="text" class="form-control" id="search_fname" placeholder="ชื่อ" name="search_fname"
                    style="width: 200px; margin-right: 10px;">
                    <label for="search_lname"><strong>นามสกุล:</strong></label>
                <input type="text" class="form-control" id="search_lname" placeholder="นามสกุล" name="search_lname"
                    style="width: 200px; margin-right: 10px;">
                    <button type="submit" class=" label-text btn btn-primary fas fa-search"> ค้นหา</button>
            </form><br>
            <table>
                <thead>
                    <tr>
                        <th><strong>รหัสผู้ใช้งาน</strong></th>
                        <th><strong>Username</strong></th>
                        <th><strong>Password</strong></th>
                        <th><strong>รหัสนักศึกษา</strong></th>
                        <th><strong>ชื่อ-นามสกุล</strong></th>
                        <th><strong>อีเมล</strong></th>
                        <th><strong>สถานะ</strong></th>
                        <th><strong>แก้ไข/ลบข้อมูล</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
       
   $itemsPerPage = 10;

   $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

   $offset = ($currentPage - 1) * $itemsPerPage;

   $sql = "SELECT * FROM user LIMIT ?, ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("ii", $offset, $itemsPerPage);
   $stmt->execute();
   $result = $stmt->get_result();

   while ($row = $result->fetch_assoc()) {
       $User_ID = $row['User_ID'];
       $User_name = $row['User_name'];
       $User_psw = $row['User_psw'];
       $num_std = $row['num_std'];
       $User_Fname = $row['User_Fname'];
       $User_Lname = $row['User_Lname'];
       $email = $row['email'];
       $status = $row['status'];
       ?>
                    <tr>
                        <td><?php echo $User_ID ?></td>
                        <td><?php echo $User_name ?></td>
                        <td><?php echo $User_psw ?></td>
                        <td><?php echo $num_std ?></td>
                        <td><?php echo $User_Fname ?> - <?php echo $User_Lname ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $status ?></td>
                        <td><a href="index_ad.php?A=1&B=8&id=<?php echo $User_ID ?>"
                                class="btn btn-warning">แก้ไขข้อมูล</a> <strong>/</strong> <button
                                class="delete-button btn btn-danger"
                                data-user-id="<?php echo $User_ID ?>">ลบข้อมูล</button></td>
                    </tr>
                    <?php
   }
                    ?>
                </tbody>
            </table><br>
            <?php

$sqlCount = "SELECT COUNT(*) FROM user";
$resultCount = $conn->query($sqlCount);
$totalCount = $resultCount->fetch_row()[0];
$totalPages = ceil($totalCount / $itemsPerPage);

echo '<ul class="pagination">';
if ($currentPage > 1) {
    echo '<li class="page-item"><a class="page-link" href="index_ad.php?A=1&B=7&page=' . ($currentPage - 1) . '">ย้อนกลับ</a></li>';
}
for ($i = 1; $i <= $totalPages; $i++) {
    if ($currentPage == $i) {
        echo '<li class="page-item active"><a class="page-link">' . $i . '</a></li>';
    } else {
        echo '<li class="page-item"><a class="page-link" href="index_ad.php?A=1&B=7&page=' . $i . '">' . $i . '</a></li>';
    }
}
if ($currentPage < $totalPages) {
    echo '<li class="page-item"><a class="page-link" href="index_ad.php?A=1&B=7&page=' . ($currentPage + 1) . '">หน้าถัดไป</a></li>';
}
echo '</ul>';
?><br>
        </main>
    </div>

    <script>
    const deleteButtons = document.querySelectorAll('.delete-button');
    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            const userID = button.getAttribute('data-user-id');
            const confirmDelete = confirm("คุณต้องการลบข้อมูลนี้ใช่หรือไม่?");

            if (confirmDelete) {
                fetch('delete_datauser.php', {
                        method: 'POST',
                        body: JSON.stringify({
                            User_ID: userID
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