<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'webtech_website';
	$conn = mysqli_connect($host,$user,$pass,$db) or die('Cannot connect to db');
	

	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password1 = mysqli_real_escape_string($conn, $_POST['password']);
		$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
		$sql = "SELECT username from users where username = '$username' ";
		$result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count != 1) {
			if($password1==$password2){
				$password = password_hash($password1, PASSWORD_DEFAULT);
				$sql = "INSERT INTO users (username, password, password2)
							VALUES ('$username', '$password', '$password')";
				mysqli_query($conn,$sql);
				header("Location: login.php");
				exit;
			} else if($password1!=$password2) {
				header("Location: register.php");
			}
		}
	}
	
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password']; 
        
        session_start();
        $_SESSION['username'] = $username; 
        $_SESSION['loggedin'] = true;
    
        $sql = "SELECT password FROM users WHERE username = '$username'";
        $result = mysqli_query($conn,$sql);
      
        $row = mysqli_fetch_row($result);
        $hash_password = $row[0];
		
      if(password_verify($password, $hash_password)) {
         header("location: Home.php");
      }else {
         header("location: login.php");
      }
	}

 
?>