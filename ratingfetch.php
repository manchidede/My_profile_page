<?php
include 'dbconnect.php';
$sql = "SELECT * FROM edittable";
$result = $conn->query($sql);
$dat=[];
foreach ($result as $row) {
    array_push($dat,$row);
}
echo json_encode($dat);
$conn=null;
?>