<?php include('server.php');?>

<!doctype html>

<html>
<head>
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Stylesheets/loginstyle.css">
    <link rel="shortcut icon" href="../images/globe.png" type="image/png">
</head>
<body>
    <div class="Container">     
            
        <h1 id="Activity-Title">WEB TECHNOLOGY AND SYSTEMS 2018 </h1>
            
        
        <div class="Authentication-Form-Sign">
            <form method="post" action="login.php">
                <div class="Image-Container">
                    <img src="../images/LogIcon.png" id="Login-Icon">
                </div>   
                
                <div class="Container-for-authentication">
                    <p class="Message-Head">Sign up Form</p>
                    
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <input type="password" placeholder="Enter Password" name="password" required>
                    
                    <input type="password" placeholder="Re-enter Password" name="password2" required>

                    <button type="submit" name="register" value="Register">Sign up</button>
					                   
                    <p class="Message-Foot">
                        Already a member? <a href="login.php">Sign in</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
                 
</body>
    
</html>