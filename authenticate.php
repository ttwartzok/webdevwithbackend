<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'sa';
$DATABASE_PASS = 'Student1!';
$DATABASE_NAME = 'STOREFRONTDB';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['username'], $_POST['password']) ) {
	
	exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT id, userpassword FROM customers WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        
        if (password_verify($_POST['password'], $password)) {
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            //echo 'Welcome ' . $_SESSION['name'] . '!';
            header("location: index.php");
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect username!';
    }


	$stmt->close();
}
?>