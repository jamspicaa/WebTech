
<!doctype html>
<html>
<head>
    <title>Finals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="land.css">
    <link rel="shortcut icon" href="images/globe.png" type="image/png">
</head>
<body>
    <div class="Container">     
        <h1 id="Activity-Title">WEB TECHNOLOGY AND SYSTEMS 2018</h1>
            
            <form method="post" action="register.php">
                
                
                <fieldset class="SignUp">
                    <legend id="Legend-Title">Sign Up</legend>
                    <table class="Sign-Up">
                        <tr>
                            <td class="Sign-Up-Line">Username:</td>
                            <td><input type="text" name="username" class="textInput"></td>
                        </tr>
                        
                        <tr>
                            <td class="Sign-Up-Line">Password:</td>
                            <td><input type="password" name="password" class="textInput"></td>
                        </tr>
                        
                        <tr>
                            <td class="Sign-Up-Line">Confirm Password:</td>
                            <td><input type="password" name="password2" class="textInput"></td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td><input type="submit" name="register" value="Register"></td>
                        </tr>
                    </table>
					<?php
						if(empty($_POST['username'])) {
							print "EMPTY";
						}
						
					?>
                    <p>
                        Already a member? <a href="login.php">Sign in</a>
                    </p>
                </fieldset>
            </form>
        <script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>
    </div>
    
</body>
</html>



