<?php 
include_once 'function.php';
$id = $_GET['id'];

echo $id;

delteRecord('user',"u_id = $id","viewdata.php");


?>