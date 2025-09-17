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
?>