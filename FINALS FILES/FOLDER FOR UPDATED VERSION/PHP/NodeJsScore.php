<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" >
	<title>NODEJS QUIZ</title>
	<link rel="stylesheet" type="text/css" href="../Stylesheets/quiz.css">
	<link rel="shortcut icon" href="images/globe.png" type="image/png">
</head>

<body>
    <div class="Header-Container">
        <nav>
            <div class="logo">Web Technology<br><br>
            </div>
            <ul>
 
                <li><a href="../index.php">Home</a></li>
                <li><a href="Notes.php">Notes</a></li>
                <li><a href="Activity.php">Activities</a></li>
                <li><a href="Reference.php">References</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>    
        <section class="Image-Section">
                <div id="Activity-Title">
                </div>
        </section>
    </div>

	<div class="Grade-Container">

		<h1>NODEJS SCORE</h1>
		
        <?php
            if(isset($_POST['submit'])) {
                
            
            $answer1 = $_POST['question-1-answers'];
        
            $answer2 = $_POST['question-2-answers'];
        
            $answer3 = $_POST['question-3-answers'];
        
            $answer4 = $_POST['question-4-answers'];
        
            $answer5 = $_POST['question-5-answers'];
        
            $answer6 = $_POST['question-6-answers'];
        
            $answer7 = $_POST['question-7-answers'];
        
            $answer8 = $_POST['question-8-answers'];
        
            $answer9 = $_POST['question-9-answers'];
        
            $answer10 = $_POST['question-10-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
        
            if ($answer2 == "A") { $totalCorrect++; }
        
            if ($answer3 == "A") { $totalCorrect++; }
        
            if ($answer4 == "B") { $totalCorrect++; }
        
            if ($answer5 == "B") { $totalCorrect++; }
        
            if ($answer6 == "D") { $totalCorrect++; }
        
            if ($answer7 == "A") { $totalCorrect++; }
        
            if ($answer8 == "A") { $totalCorrect++; }
        
            if ($answer9 == "B") { $totalCorrect++; }
        
            if ($answer10 == "D") { $totalCorrect++; }
        
        
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
            }
            
            session_start();
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'webtech_website';
            $conn = mysqli_connect($host,$user,$pass,$db) or die('Cannot connect to db');
            $username = $_SESSION['username'];
            
            $sql = "SELECT username from scores where username = '$username' ";
            $result = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($result);
            if($count != 1) { 
                $sql = "INSERT INTO scores (username, score, topic)
                    VALUES ('$username', '$totalCorrect', 'nodeJs')";
                mysqli_query($conn,$sql);
                exit;
            }
        ?>
	
	</div>
    

</body>

</html>