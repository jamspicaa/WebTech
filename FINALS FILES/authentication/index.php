<!doctype html>

<html>
<head>
    <title>Finals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="images/globe.png" type="image/png">
</head>
<body>
    <div class="Header-Container">
        <nav>
            <div class="logo">Web Technology<br><br>
            </div>
            <ul>
 
                <li><a href="#Activity-Title">Home</a></li>
                <li><a href="Notes.html">Notes</a></li>
                <li><a href="Activity.html">Activities</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>    
        <section class="Image-Section">
                <h1 id="Activity-Title">WEB TECHNOLOGY AND SYSTEMS 2018 </h1>
                <div>
                    <?php 
                        echo $_SESSION['username'];
                    ?>
                </div>
        </section>
        
    </div>
    
    <div class="Body-Container">
        <p id="Quote">“What separates design from art is that design is meant to be… functional.” ― Cameron Moll</p>
    </div>
    
    
</body>
    
</html>