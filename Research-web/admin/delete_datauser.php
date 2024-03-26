<?php
include 'condb.php';

$data = json_decode(file_get_contents("php://input"));
$userID = $data->User_ID;


$sql = "DELETE FROM user WHERE User_ID = '$userID'";


$result = mysqli_query($conn, $sql);

if ($result) {
   
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>