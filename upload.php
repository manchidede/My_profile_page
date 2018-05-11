<?php
// if ( 0 < $_FILES['fileToUpload']['error'] ) {
//     echo '<script>alert("Error in upload");</script>';
// }
// else {
//     echo 'Upload successful';
//     move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'uploads/' . $_FILES['fileToUpload']['name']);

// }


$target_dir = "uploads/";
$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["fileToUpload"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo $target_file;
        include 'dbconnect.php';
        try {
            // prepare sql and bind parameters
            $data = $conn->prepare("UPDATE edittable SET profilepic=:pic");
            $data->bindParam(':pic', $target_file);
            //execute query to insert into row
            $data->execute();
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