<?php
    session_start();

    $host="localhost" ;
    $user="root";
    $password="";
    $db="authentication";

    mysql_connect($host, $user, $password);
    mysql_select_db($db);
    
    $conn = new myslqi($host, $user, $password, $db);
    $username = "";
    $errors = array();

    if (isset($POST['register'])) {
        register();
    }

    
    if (isset($POST['register'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysql_real_escape_string($db, $_POST['password']);
        $password2 = mysql_real_escape_string($db, $_POST['password2']);
        
        
        
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        
        if ($password != password2) {
            array_push($errors, "The two passwords do not match");
        }
        
        if (count($errors) == 0) {
            $password = md5($password);
            $mysqli_query = "INSERT INTO users (username, password) 
                    VALUES  ('$username', '$password')";
            echo "Registration was succesful"; 
            mysqli_query($db, $sql);
        }
        
    }

?>






