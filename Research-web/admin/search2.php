<?php
include 'condb.php';

mysqli_set_charset($conn, "utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_num = isset($_POST['search_num']) ? htmlspecialchars($_POST['search_num']) : '';
    $search_fname = isset($_POST['search_fname']) ? htmlspecialchars($_POST['search_fname']) : '';
    $search_lname = isset($_POST['search_lname']) ? htmlspecialchars($_POST['search_lname']) : '';


    $sqlpub = "SELECT * FROM user WHERE num_std LIKE '%" . $search_num . "%' 
    AND User_Fname LIKE '%" . $search_fname . "%' 
    AND User_Lname LIKE '%" . $search_lname . "%'";
    $resultpub = $conn->query($sqlpub);

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
        <form action="index_ad.php?A=1&B=7" method="POST">
            <input type="hidden" name="search_num" value="<?php echo $search_num; ?>">
            <br>
            <center>
                <h3>แสดงยูเซอร์ที่ค้นหา</h3>
            </center>
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
                    if ($resultpub->num_rows > 0) {
                        while ($row = $resultpub->fetch_assoc()) {

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
} else {
    echo "ไม่พบข้อมูล";
}

        ?>
                </tbody>
            </table>
          
            <br>
            <center>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary">กลับหน้าค้นหา</button>
                </div><br>
            </center>

        </form>
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
