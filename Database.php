<?php
$servername = "mysql13.unoeuro.com";
$username = "ukendtdomaene_dk";
$password = "B5RpGacghdre34bt6w2A";
$database = "ukendtdomaene_dk_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


function addbruger($email, $password, $name){
    $sql = "INSERT INTO Brugere (`Email`, `Password`, `Name`) VALUES ('$email','$password','$name')";
    $userExist = checkname($name);
    if ($userExist == false){
        $GLOBALS['conn']-> query($sql);
    }else{
        echo "user eksistere allerede din bums";
    }
}


function checkname($name){
    $sql = "SELECT `Email`, `Password`, `Name` FROM Brugere WHERE name='$name'";
    $result = $GLOBALS['conn'] -> query($sql);
    $userExist = false;
    if ($result->num_rows > 0) {
        $userExist = true;
    }
    return $userExist;
}

function PostSnak($name, $title, $content, $tags, $film){
    $time = date("Y/m/d") . ":" . date("H:i");
    $sql = "INSERT INTO `Snak`(`name`, `time`, `title`, `content`, `tags`, `film`, `likes`) VALUES ('$name','$time','$title','$content','$tags','$film', 1)";

    $GLOBALS['conn']-> query($sql);
    echo "SHITTET ER POSTET";
}

function PostForslag($name, $title, $content){
    $time = date("Y/m/d") . ":" . date("H:i");
    $sql = "INSERT INTO `Forslag`(`name`, `time`, `title`, `content`, `likes`) VALUES ('$name','$time','$title','$content', 1)";

    $GLOBALS['conn']-> query($sql);
    echo "SHITTET ER POSTET2";
}

function Postanmeld($name, $title, $content, $tags, $film){
    $time = date("Y/m/d") . ":" . date("H:i");
    $sql = "INSERT INTO `Anmeld`(`name`, `time`, `title`, `content`, `tags`, `film`, `likes`) VALUES ('$name','$time','$title','$content','$tags','$film', 1)";

    $GLOBALS['conn']-> query($sql);
    echo "SHITTET ER POSTET3";
}


?>