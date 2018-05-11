<?php
//for skills
    if (!empty($_POST["skill"])) {
        include 'dbconnect.php';
        try {
            // prepare sql and bind parameters
            $data = $conn->prepare("UPDATE edittable SET skills=:skills");
            $data->bindParam(':skills', $_POST["skill"]);
            //execute query to insert into row
            $data->execute();
                $submissionSuccessful = true;
            }
        catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
            }
        $conn = null;
     }
//for hobbies
     if (!empty($_POST["hobbies"])) {
        include 'dbconnect.php';
        try {
            // prepare sql and bind parameters
            $data = $conn->prepare("UPDATE edittable SET hobbies=:hobbies");
            $data->bindParam(':hobbies', $_POST["hobbies"]);
            //execute query to insert into row
            $data->execute();
                $submissionSuccessful = true;
            }
        catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
            }
        $conn = null;
     }

//for bio
if (!empty($_POST["bio"])) {
    include 'dbconnect.php';
    try {
        // prepare sql and bind parameters
        $data = $conn->prepare("UPDATE edittable SET bio=:bio");
        $data->bindParam(':bio', $_POST["bio"]);
        //execute query to insert into row
        $data->execute();
            $submissionSuccessful = true;
        }
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
    $conn = null;
 }
?>