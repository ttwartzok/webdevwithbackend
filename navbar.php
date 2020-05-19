<?php session_start() ?>
<nav>
<a href="#" onclick="randomLink();">Surprise Me</a> |
	<a href="/about.html">About us</a> |
	<a href="/contact.html">Contact Us</a> | 
	<a href="/products.php">Products</a> |
	
    
    <?php  if (!isset($_SESSION['loggedin'])) {?>
        <a href="/signin.html" >Sign in</a> | 
        <a href="/register.html" >Register</a> |
      
      <?php } else { ?>
        <a href="profile.php">view profile</a> |
      <a href="logout.php">log out</a> | 
      <a>Welcome, <?=$_SESSION['username']?></a> 
        
         <?php } ?>
</nav>