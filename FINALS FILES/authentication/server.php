<?php 
	session_start();
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'authentication';
	$conn = mysqli_connect($host,$user,$pass,$dbname) or die('Cannot connect to db');
	
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password1 = mysqli_real_escape_string($conn, $_POST['password']);
		$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
		
		$sql = "SELECT username from users where username = '$username' ";
		$result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count != 1) {
			if($password1==$password2){
				$password = md5($password1);
				$sql = "INSERT INTO users (username, password, password2)
							VALUES ('$username', '$password', '$password')";
				mysqli_query($conn,$sql);
				header("Location: login.php");
				exit;
			} else if($password1!=$password2) {
				//Do something if password1 and password2 mismatched.
			}
		}
	}
?>