<?php
$servername= "localhost";
$Firstname ="";
$Secondname ="";
$email ="";
$Enterpassword ="";
$database ="hotel";
$conn = new mysqli($servername, $Firstname, $Secondname, $email, $Enterpassword $database);
if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
}
echo "Connection Successful";
?>