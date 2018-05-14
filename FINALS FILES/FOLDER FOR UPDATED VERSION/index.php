<!doctype html>

<html>
<head>
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Stylesheets/style.css">
    <link rel="shortcut icon" href="images/globe.png" type="image/png">
</head>
    
<body>
    <div class="Header-Container">
        <nav>
            <div class="Logo-Title">Web Technology</div>
			<ul>
                <li>
                    <?php 
                    session_start();
                    if(!isset($_SESSION['loggedin'])) {
                        echo '<a href="PHP/login.php">Login</a>';
                    } else {
                        echo '<a href="PHP/Home.php">Logout</a>';
                    }
                    ?>
                </li>
            </ul>
        </nav> 
        
        <section class="Index-Image-Section">
                <div id="Activity-Title">
                    <script src="jscript.js" >
                    </script>
                    <?php
                    if(isset($_SESSION['loggedin'])) {
                        
                        echo ' '.$_SESSION['username'].'!';
                    } else {
                        echo ' Guess!';
                    }
                    ?>
                </div>
        </section>
    </div>
	
	<div class="Mission-V">
		<h2>Mission</h2>
<p>Our website serve as the connection between a student and academic materials and resources in order to them to gain knowledge. We provide them a high -quality and the accessibility to these resources to promote learning in a easier way. The website provides a well-grounded learning environment that meet the learning requirements of the students and promote accessibility of learning within the university and contribute a well-content information resources.</p>

<h2>Vision</h2>
<p>Our vision is to create a website that motivates the students to learn more about Web Systems and Technologies and strengthen the capability and capacity of the students in learning and studying different topics where they can gain access to some additional comprehensive informations. This website enables the students to easily access information they needed about Web Systems and Technology in time-efficient manner.</p>
	</div>
    
    <div class="Index-Body-Container">
        <p id="Quote">What separates design from art is that design is meant to be functional. By Cameron Moll</p>
    </div>    
</body> 
</html>