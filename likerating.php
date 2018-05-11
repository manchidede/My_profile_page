<?php
//for Rating
if (!empty($_POST["like"])) {
    include 'dbconnect.php';
        try {
            // prepare sql and bind parameters
            $data = $conn->prepare("UPDATE edittable SET likes=:likes");
            $data->bindParam(':likes', $_POST["like"]);
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
 
//for Rating
function updatedb($param){
    include 'dbconnect.php';
        try {
            // prepare sql and bind parameters
            $data = $conn->prepare("UPDATE edittable SET $param=:star1");
            $data->bindParam(':star1', $_POST[$param]);
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

    if (!empty($_POST["star1"])) {
        updatedb('star1');
     }
     if (!empty($_POST["star2"])) {
        updatedb('star2');
     }
     if (!empty($_POST["star3"])) {
        updatedb('star3');
     }
     if (!empty($_POST["star4"])) {
        updatedb('star4');
     }
     if (!empty($_POST["star5"])) {
        updatedb('star5');
     }

    ?>