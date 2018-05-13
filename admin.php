<?php
if($_GET["password"]!=chidi){
    header("Location: index.php");
    exit;
}
include 'dbconnect.php';
$sql = "SELECT Profilepic, skills, hobbies, bio FROM edittable";
$result = $conn->query($sql);
foreach ($result as $row) {
    $profilepic=$row["Profilepic"];
    $skills=$row["skills"];
    $hobbies=$row["hobbies"];
    $bio=$row["bio"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/admin.js"></script>
</head>
<body>
    <div class="container">
        <div class="first">
            <div><img id="profilepic" src="<?php echo "$profilepic"; ?>" alt=""><img id="profilepicupload" src="images/picedit.png" alt=""></div>
            <input id="profileuploadhide" type="file" name="fileToUpload">
            <br>
            <span>
            <button id="skills">Skills <img src="images/edit.png" alt=""> </button><br>
            <div class="skillsedit">
                <input type="text" id="skillsinput" value="<?php echo "$skills"; ?>">
                <button id="updateskills">Update</button>
            </div>
        </span>
        <span>
            <button id="hobbies">Hobbies <img src="images/edit.png" alt=""> </button></button><br>
            <div class="hobbiesedit">
                    <input type="text" id="hobbiesinput" value="<?php echo "$hobbies"; ?>">
                    <button id="updatehobbies">Update</button>
                </div>
        </span>
            <span>
            <button id="bio">Bio <img src="images/edit.png" alt=""> </button></button>
            <div class="bioedit">
                    <input type="text" id="bioinput" value="<?php echo "$bio"; ?>">
                    <button id="updatebio">Update</button>
                </div>
        </span>
        </div>
        <div class="second">
            <h1>Projects</h1><hr>

            <?php
$sqlselect = "SELECT title, content, imgname FROM completedprojects order by id desc";
$results = $conn->query($sqlselect);
foreach ($results as $rows) {
    echo '<div class="projectlist">
            <div class="text">
            <h1>'.$rows["title"].'</h1>
            <p>'.$rows["content"].'</p></div>
            <div class="img"><img src="'.$rows["imgname"].'" alt=""></div>
            <br><br><hr>
        </div>';
}
$conn = null;
?>
        </div>
        <div class="third">
            <h2>Post new projects</h2>
            <input type="text" placeholder="Title" id="title">
            <textarea name="" id="content" rows="3" placeholder="short Description"></textarea>
            <input id="projectuploadhide" type="file" name="projectpic">
            <button id="projectupload">Upload Image</button><img id="imgpreview" src="#" /><br>
            <button id="submit" type="submit">Submit</button>
        </div>
    </div>
</body>
</html>