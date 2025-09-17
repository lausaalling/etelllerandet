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

    $GLOBALS['conn']-> query($sql);
}

?>