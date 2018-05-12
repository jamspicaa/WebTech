 <!Doctype html>

<head>
    <title>Node JS Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="quiz.css">
    <link rel="shortcut icon" href="images/globe.png" type="image/png">
</head>
<body>
    <div class="Header-Container">
       
    </div>
    <div class="Quiz-Container">
        <h1 style="text-align: center;">Test your NodeJS skill</h1>
        
        <form action="JavaScriptScore.php" method="post" id="quiz">
            <h2>Welcome to NodeJS! Good luck!</h2><br><br>
            <ol>
                <li>
                    <h3>What is a JavaScript run-time environment.</h3>b
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required />
                        <label for="question-1-answers-A">A) Note.js</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Node.js</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Need.js</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Nude.js</label>
                    </div>
                </li><br>
                <li>
                    <h3>It can be anything that ranges from reading/writing local files to making an HTTP request to an API.</h3>a
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required />
                        <label for="question-2-answers-A">A) Input/Output (I/O)</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Input/Input (I/I)</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Output/Output (O/O)</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) None of the Above</label>
                    </div>
                </li><br>
                <li>
                    <h3>In this method, the request of a user b’s data is not initiated until user a’s data is being displayed to the screen.</h3>a
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required />
                        <label for="question-3-answers-A">A) Blocking I/O</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Non-Blocking I/O</label>
                    </div>                  
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) None-Blocking I/O</label>
                    </div>              
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) None of the Above</label>
                    </div>          
                </li><br>
                <li>
                    <h3>A user can initiate a data request for user b without waiting for the response the request for user a. 
                        A user can initiate both requests in parallel.This non-blocking, 
                        I/O removes the need for multi-threading, since the server can handle multiple requests at the same time.</h3>b
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required />
                        <label for="question-4-answers-A">A) Blocking I/O</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Non-Blocking I/O</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) None-Blocking I/O</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) None of the Above</label>
                    </div>
                </li><br>
                <li>
                    <h3>These are the ways of File request using PHP or ASP except?</h3>b
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required />
                        <label for="question-5-answers-A">A) Sends the task to the computer's file system.</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Ready to handle the previous request.</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Waits while the file system opens and reads the file.</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Returns the content to the client.</label>
                    </div>
                </li><br>
                <li>
                    <h3>These are the ways of File request using Node.js</h3>d
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required />
                        <label for="question-6-answers-A">A) Sends the task to the computer's file system.</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) Ready to handle the next request.</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) When the file system has opened and read the file, 
                            the server returns the content to the client.</label>
                    </div>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) Returns the content to the client.</label>
                    </div>
                </li><br>
                <li>
                    <h3>Node.js can do this task except?</h3>a
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required />
                        <label for="question-7-answers-A">A) Dosen't collect form data</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) It generates a dynamic page content</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) Create, open, read, write, delete, and close files on the server</label>
                    </div>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) Add, delete, modify data in your database</label>
                    </div>
                </li><br>
                <li>
                    <h3>Contains a set of built-in modules which a user can use without installing it.</h3>a
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required />
                        <label for="question-8-answers-A">A) Built-in Modules</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) Include Modules</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) Non-Built-in Modules</label>
                    </div>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) Non-Include Modules</label>
                    </div>
                </li><br>
                <li>
                    <h3>Uses require() function with the name of the module: var http = require('http');</h3>b
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required />
                        <label for="question-9-answers-A">A) Built-in Modules</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) Include Modules</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) Non-Built-in Modules</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) Non-Include Modules</label>
                    </div>
                </li><br>
                <li>
                    <h3>The HTTP module can make an HTTP server that listens to server ports and provides a response back to the client.</h3>d
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required />
                        <label for="question-10-answers-A">A) Node.js as a Client</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) Node.js as a Server</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) Node.js as a Client Server</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) Node.js as a Web Server</label>
                    </div>
                </li><br>
                <button class="button" type="submit" name="submit">Submit</button>
            </ol>
            
		</form>