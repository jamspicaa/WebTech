 <!Doctype html>

<head>
    <title>Finals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Stylesheets/quiz.css">
    <link rel="shortcut icon" href="../images/globe.png" type="image/png">
</head>
<body>
    <div class="Header-Container">
       
    </div>
    <div class="Quiz-Container">
        <h1>Test your JavaServlets skill</h1>
        
		<form action="JavaServletScore.php" method="post" id="quiz">
            <h2>Welcome to JavaServlet! Good luck!</h2><br><br>
            <ol>
                <li>
                    <h3>Java objects that are intended to play the role of server components in client-server communications.</h3>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required />
                        <label for="question-1-answers-A">A) Java Script</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Java Servlets</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Web Script</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Web Servlets</label>
                    </div>
                </li><br>
                <li>
                    <h3>This is the JavaServlet life cycle except?</h3>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required />
                        <label for="question-2-answers-A">A) Instantiation</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Service</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Destruction</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Implementation</label>
                    </div>
                </li><br>
                <li>
                    <h3>This is the first phase of the Servlet life cycle and represents the creation 
                        and initialization of resources the Servlet may need to service requests.</h3>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required />
                        <label for="question-3-answers-A">A) Data Gathering</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Instantiation</label>
                    </div>                  
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Service</label>
                    </div>              
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Destruction</label>
                    </div>          
                </li><br>
                <li>
                    <h3>It represents all interactions with requests until the Servlet is destroyed.</h3>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required />
                        <label for="question-4-answers-A">A) Instantiation</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Service</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Destruction</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Connection</label>
                    </div>
                </li><br>
                <li>
                    <h3>It represents when a Servlet is being removed from use by a container.</h3>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required />
                        <label for="question-5-answers-A">A) Instantiation</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Service</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Destruction</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Notifications</label>
                    </div>
                </li><br>
                <li>
                    <h3>Provides an abstract class to be subclassed to create an HTTP servlet suitable for a Web site.</h3>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required />
                        <label for="question-6-answers-A">A) httpScript</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) httpServlet</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) httpJava</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) httpJSnode</label>
                    </div>
                </li><br>
                <li>
                    <h3>What code of servlet supports HTTP GET requests.</h3>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required />
                        <label for="question-7-answers-A">A) doGet</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) doPost</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) doPut</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) doDelete</label>
                    </div>
                </li><br>
                <li>
                    <h3>What code of servlet supports HTTP POST requests.</h3>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required />
                        <label for="question-8-answers-A">A) doGet</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) doPost</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) doPut</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) doDelete</label>
                    </div>
                </li><br>
                <li>
                    <h3>What code of servlet supports HTTP PUT requests.</h3>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required />
                        <label for="question-9-answers-A">A) doGet</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) doPost</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) doPut</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) doDelete</label>
                    </div>
                </li><br>
                <li>
                    <h3>What code of servlet supports HTTP DELETE requests.</h3>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required />
                        <label for="question-10-answers-A">A) doGet</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) doPost</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) doPut</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) doDelete</label>
                    </div>
                </li><br>
             <button class="button" type="submit" name="submit">Submit</button>
            </ol>
           
		</form>