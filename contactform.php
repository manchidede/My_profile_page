<?php
if(isset($_POST["data"])){
    include 'dbconnect.php';
$sql = "SELECT name, email, content FROM contactmessage order by id desc";
$result = $conn->query($sql);
$message=[];
foreach ($result as $row) {
    array_push($message,$row);
}
echo json_encode($message);
$conn = null;
}
else{
//insert data from form in index.php
if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["content"])) {
include 'dbconnect.php';
        try {
            // prepare sql and bind parameters
            $data = $conn->prepare("INSERT INTO `contactmessage`(`name`, `email`, `content`) 
            VALUES (:name, :email, :content)");
            $data->bindParam(':name', $_POST["name"]);
            $data->bindParam(':email', $_POST["email"]);
            $data->bindParam(':content', $_POST["content"]);
            //execute query to insert into row
            $data->execute();
                echo "Message sent Successfully!";
            }
        catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
            }
        $conn = null;

        }else{
            echo "Please fill all fields";
        }
    }
        ?>
    