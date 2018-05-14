 <!Doctype html>

<head>
    <title>Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Stylesheets/quiz.css">
    <link rel="shortcut icon" href="../images/globe.png" type="image/png">
</head>
<body>
    <div class="Header-Container">
       
    </div>
    <div class="Quiz-Container">
        <h1 style="text-align: center;">Test your PHP skill</h1>
        
		<form action="PHPScore.php" method="post" id="quiz">
            <h2>Welcome to PHP! Good luck!</h2><br><br>
            <ol>
                <li>
                    <h3>PHP was developed by?</h3>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required />
                        <label for="question-1-answers-A">A) Micro Technologies</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Zend Technologies</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Send Technologies</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the Above</label>
                    </div>
                </li><br>
                <li>
                    <h3>PHP is a ________ language designed for web development.</h3>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required />
                        <label for="question-2-answers-A">A) Server-side scripting</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Client-side scripting</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Server-Client-side scripting</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) None of the Above</label>
                    </div>
                </li><br>
                <li>
                    <h3>PHP was originally created by?</h3>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required />
                        <label for="question-3-answers-A">A) Rasmus Lerdorf</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) James Gosling</label>
                    </div>                  
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Jon Snow</label>
                    </div>              
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) None of the Above</label>
                    </div>          
                </li><br>
                <li>
                    <h3>PHP originally stood for?</h3>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required />
                        <label for="question-4-answers-A">A) Private Home Page</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Public Home Page</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Personal Home Page</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) None of the Above</label>
                    </div>
                </li><br>
                <li>
                    <h3>What is the correct PHP tags?</h3>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required />
                        <label for="question-5-answers-A">A) ?php ?</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) !php !</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Either A or B</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) None of the Above</label>
                    </div>
                </li><br>
                <li>
                    <h3>PHP was invented at the year?</h3>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required />
                        <label for="question-6-answers-A">A) 1992</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) 1995</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) 1998</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) 1994</label>
                    </div>
                </li><br>
                <li>
                    <h3>PHP runs on various platforms like</h3>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required />
                        <label for="question-7-answers-A">A) Windows</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) Linux</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) Unix</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) All of the Above</label>
                    </div>
                </li><br>
                <li>
                    <h3>PHP files can contain</h3>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required />
                        <label for="question-8-answers-A">A) HTML</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) CSS</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) JavaScript</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) All of the Above</label>
                    </div>
                </li><br>
                <li>
                    <h3>PHP files have extension of</h3>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required />
                        <label for="question-9-answers-A">A) .phph</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) .php</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) .ph</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) None of the Above</label>
                    </div>
                </li><br>
                <li>
                    <h3>What is the latest version of PHP as of today?</h3>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required />
                        <label for="question-10-answers-A">A) PHP 8</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) PHP 7</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) PHP 6</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) None of the Above</label>
                    </div>
                </li><br>
            <button class="button" type="submit" name="submit">Submit</button>
            </ol>
            
		</form>