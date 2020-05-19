<?php
$server = "localhost";
$user = "sa";
$dbpassword = "Student1!";
$database = "STOREFRONTDB";
$connection = new mysqli($server,$user,$dbpassword,$database);

$query="CREATE TABLE customers
( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50)  NOT NULL UNIQUE,
    userpassword VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP)
";

$result = $connection->query($query);
if($result === TRUE)
{
    echo"table CUSTOMERS created";
}else{

    echo"an error has occured".$connection->error;
    
}
    


$connection->close();

?>