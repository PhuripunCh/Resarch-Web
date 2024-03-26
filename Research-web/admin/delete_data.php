<?php
include 'condb.php';


$data = json_decode(file_get_contents("php://input"));
$researchID = $data->Research_ID;


$sql = "DELETE FROM research WHERE Research_ID = '$researchID'";


$result = mysqli_query($conn, $sql);

if ($result) {

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>