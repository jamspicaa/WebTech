<?php
	session_start();
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'authentication';
	$conn = mysqli_connect($host,$user,$pass,$db) or die('Cannot connect to db');
	
    if(isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password']; 
      $password = md5($password);
      $sql = "SELECT username FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         header("location: index.php");
      }else {
         header("location: login.php");
      }
	}
?>