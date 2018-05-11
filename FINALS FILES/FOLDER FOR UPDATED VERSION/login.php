<?php include('server.php'); ?>

<!doctype html>

<html>
<head>
    <title>Finals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link rel="shortcut icon" href="images/globe.png" type="image/png">
</head>
<body>
    <div class="Container">     
            
                <h1 id="Activity-Title">WEB TECHNOLOGY AND SYSTEMS 2018 </h1>
            
        
        <div class="Authentication-Form-Login">
            <form method="post" action="index.html" >
                <div class="Image-Container">
                    <img src="images/LogIcon.png" id="Login-Icon">
                </div>   
                
                <div class="Container-for-authentication">
                    <p class="Message-Head">Login Form</p>
                    
                    <input type="text" class="text/input" placeholder="Enter Username" name="username" required>

                    <input type="password" class="textInput" placeholder="Enter Password" name="password" required>

                    <button type="submit" name="login">Login</button>
                    
                    <p class="Message-Foot">
                        Doesn't have an account? <a href="register.php">Sign up</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
                 
</body>
    
</html>