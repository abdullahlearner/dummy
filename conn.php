<?php 

function getDBConnection(){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpcurd";

$conn = new mysqli($servername,$username,$password , $dbname );

if($conn->connect_error){
    die("connection failed". $conn->connect_error);
}

return $conn;
}
?>