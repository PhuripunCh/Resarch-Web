<?php
include 'condb.php';


$data = json_decode(file_get_contents("php://input"));
$report_ID = $data->Report_ID;


$sql = "DELETE FROM report WHERE Report_ID = '$report_ID'";


$result = mysqli_query($conn, $sql);

if ($result) {
 
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>