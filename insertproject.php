<?php
$target_dir = "uploads/";
$target_file = $target_dir . $_FILES["projectupload"]["name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["projectupload"])) {
    $check = getimagesize($_FILES["projectupload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["projectupload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        include 'dbconnect.php';
        try {
            // prepare sql and bind parameters
            $data = $conn->prepare("INSERT INTO completedprojects (title, content, imgname)
            VALUES (:title, :content, :imgname)");
            $data->bindParam(':title', $_POST["title"]);
            $data->bindParam(':content', $_POST["content"]);
            $data->bindParam(':imgname', $target_file);
            //execute query to insert into row
            $data->execute();
            echo "Saved Successfully";
            }
        catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
            }
        $conn = null;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>