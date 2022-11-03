<?php 

$server="localhost";
$user="root";
$pass="";
$database="registro";

try{
  $conn = new PDO("mysql:host=$server;dbname=$database;",$user,$pass);  
}catch(PDOException $e){
    die('Connected failed: ' . $e->getMessage());
}
?>