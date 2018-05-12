<?php
include 'dbconnect.php';
$sqlselect = "SELECT title, content, imgname FROM completedprojects order by id desc";
$results = $conn->query($sqlselect);
$data=[];
foreach ($results as $rows) {
    array_push($data,$rows);
}
echo json_encode($data);
$conn = null;
?>