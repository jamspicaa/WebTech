<!doctype html>

<html>
<head>
    <title>Activity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Stylesheets/style.css">
    <link rel="shortcut icon" href="../images/globe.png" type="image/png">
</head>
    
<body>
    <div class="Header-Container">
         <nav>
            <div class="Logo-Title">Web Technology</div>
            <ul>
                <li>
                    <a href="Home.php">Home</a>
                </li>
                <li>
                    <a href="Notes.php">Notes</a>
                </li>
                <li>
                    <a href="Activity.php">Activities</a>
                </li>
                <li>
                   <a href="About.php">About</a>
                </li>
                <li>
                    <?php 
                        session_start();
                        if(!isset($_SESSION['loggedin'])) {
                            echo '<a href="login.php">Login</a>';
                        } else {
                            echo '<a href="logout.php">Logout</a>';
                        }
                    ?>
                </li>
            </ul>
        </nav>  
        
        <section class="Image-Activity-Section">
            <h1 id="Activity-Title">Test Your Knowledge</h1>
        </section>
    </div>
    
    <div class="Activity-Container">
        <h1 id="Quiz-Header-Title">Quiz</h1>
        <hr id="Activity-hr">
        <p id="Activity-Paragraph">Here is a list of topics under JavaScript, Java Servlets and Php. This was designed to test your skill for the following topics.</p>
        
        <div class="Activity-Button-Container">
            <div class="Left-Div-Button" >
                <?php
                    $host = 'localhost';
                    $user = 'root';
                    $pass = '';
                    $db = 'webtech_website';
                    $conn = mysqli_connect($host,$user,$pass,$db) or die('Cannot connect to db');
                    if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        $sql = "SELECT score FROM scores WHERE topic = 'javaScript' AND username = '$username'";
                        $result = mysqli_query($conn,$sql);

                        $row = mysqli_fetch_row($result);
                        $numRow = mysqli_num_rows($result);
                        $grade = $row[0];
                        if($numRow == 1) {
                            echo '<button class="JS-Button" id="Button-1Q\">';
                            echo '<img src="../images/JS.png" id="Image-1Q"> </button>';

                        } else if ($numRow == 0) {
                            echo '<button onclick="window.location.href=\'JavaScriptQuiz.php\'" class="JS-Button" id="Button-1Q\">';
                            echo '<img src="../images/JS.png" id="Image-1Q"> </button>';
                        }
                     } else {
                        echo '<button class="JS-Button" id="Button-1Q\">';
                        echo '<img src="../images/JS.png" id="Image-1Q"> </button>';
                    }
                    if(isset($grade)) {
                        echo '<p>'.$grade.'/10</p>';
                    }
                ?>
				
            </div>
            
            <div class="Beside-Text">
               <span>Java Script</span>
               <p class="Paragraph-Text">JavaScript is a cross-platform, object-oriented scripting language used to make webpages interactive</p>
            </div>

            <div class="Center-Div-Button">
                <?php
                    $host = 'localhost';
                    $user = 'root';
                    $pass = '';
                    $db = 'webtech_website';
                    $conn = mysqli_connect($host,$user,$pass,$db) or die('Cannot connect to db');
                    if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        $sql = "SELECT score FROM scores WHERE topic = 'javaServlet' AND username = '$username'";
                        $result = mysqli_query($conn,$sql);

                        $row = mysqli_fetch_row($result);
                        $numRow = mysqli_num_rows($result);
                        $grade = $row[0];
                        if($numRow == 1) {
                            echo '<button class="JS-Button" id="Button-1Q\">';
                            echo '<img src="../images/JavaS.png" id="Image-1Q"> </button>';

                        } else if ($numRow == 0) {
                            echo '<button onclick="window.location.href=\'JavaServletQuiz.php\'" class="JS-Button" id="Button-1Q\">';
                            echo '<img src="../images/JavaS.png" id="Image-1Q"> </button>';
                        }
                     } else {
                        echo '<button class="JS-Button" id="Button-1Q\">';
                        echo '<img src="../images/JavaS.png" id="Image-1Q"> </button>';
                    }
                    if(isset($grade)) {
                        echo '<p>'.$grade.'/10</p>';
                    }
                ?>
            </div>
            
            <div class="Beside-Text">
                <span>Java Servlet</span>
                <p class="Paragraph-Text">A Java servlet is a Java program that extends the capabilities of a server.</p>
            </div>
            
            <div class="Right-Div-Button">
                <h4 id="Button1-Title"> 
                    <button onclick="window.location.href='PHPQuiz.php'" class="JS-Button" id="Button-3Q">    
                        <img src="../images/PHP.png" id="Image-3Q">
                    </button>
                </h4>
            </div>
            
            <div class="Beside-Text">
                <span>Php</span>
                <p class="Paragraph-Text">PHP is a server side scripting language suited for web based technologies and it can be embedded into HTML.</p>
            </div>
            
            <div class="Another-Div-Button">
                <?php
                    $host = 'localhost';
                    $user = 'root';
                    $pass = '';
                    $db = 'webtech_website';
                    $conn = mysqli_connect($host,$user,$pass,$db) or die('Cannot connect to db');
                    if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        $sql = "SELECT score FROM scores WHERE topic = 'php' AND username = '$username'";
                        $result = mysqli_query($conn,$sql);

                        $row = mysqli_fetch_row($result);
                        $numRow = mysqli_num_rows($result);
                        $grade = $row[0];
                        if($numRow == 1) {
                            echo '<button class="JS-Button" id="Button-1Q\">';
                            echo '<img src="../images/nodeJS.png" id="Image-1Q"> </button>';

                        } else if ($numRow == 0) {
                            echo '<button onclick="window.location.href=\'NodeJSQuiz.php\'" class="JS-Button" id="Button-1Q\">';
                            echo '<img src="../images/nodeJS.png" id="Image-1Q"> </button>';
                        }
                     } else {
                        echo '<button class="JS-Button" id="Button-1Q\">';
                        echo '<img src="../images/nodeJS.png" id="Image-1Q"> </button>';
                    }
                    if(isset($grade)) {
                        echo '<p>'.$grade.'/10</p>';
                    }
                ?>
            </div>
                
            <div class="Beside-Text">
                <span>Node.js</span>
                <p class="Paragraph-Text">is an open-source, cross-platform JavaScript run-time environment that executes JavaScript code server-side. </p>
            </div>
            
        </div>
    </div>
    
</body>
</html>