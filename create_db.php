<?php 
$server="localhost";
$user="sa";
$dbpassword="Student1!";

$connection = new mysqli($server,$user,$dbpassword);

$query="CREATE DATABASE STOREFRONTDB";

if($result){
    echo"created storefrontdb";
}else{
    echo"Not Enough Power";
}
$connection -> close();
?>