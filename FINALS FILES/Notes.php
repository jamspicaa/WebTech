<!doctype html>

<html>
<head>
    <title>Notes</title>
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
                    <a href="../index.php">Home</a>
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
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>  
        
        <section class="Notes-Image-Section">
            <h1 id="Activity-Title">Course Notes</h1>
        </section>
    </div>
    
    <div class="Activity-Choice">
		 <div class="center-on-page">
            <div id="Note-Title">Please select a topic</div>
            <div class="select">
                <select class="form-control" id = "opts" onChange="showForm()" name="notes">
                    <option disabled selected>Topic you want to study:</option>
                    <option value="1">Java Servlets</option>
                    <option value="2">Session Handling</option>
                    <option value="3">PHP</option>
                    <option value="4">Node.js</option>
                    <option value="5">JSP</option>
                    <option value="6">Web Application Security</option>
                </select>
            </div>
		</div>
              
	</div>
            <div id = "f1" style="display:none">
                
            <div class="center-on-page">  
                <div class="container">
                    <header>
                        <h1 id=Topic1-Title>Java Servlets</h1>
                    </header>
                    
                    <div class="Topic-Space">
                        <div class="Java-Servlet-Space-Container">
                            <h2 id="Topic-Sub-Title">Server-Side Programming</h2>
                                <h3> Java Servlets</h3>
                                    <p>Java objects that are intended to play the role of server components in client-server communications. The Java servlets are server-side programs, which is running inside a web server, that handle clients' requests and return a customized or dynamic response for each request.</p>

                                    <p>Using Servlets, you can collect input from users through web page forms, present records from a database or another source, and create web pages dynamically.</p>

                                    <p>Part of the Java EE specification(See <a href="https://docs.oracle.com/javaee/7/api/javax/servlet/package-summary.html" target="_blank">Java Servlet API </a>for more details)</p>
                        </div>
                    </div>
                    
                    <div class="Servlet-Photo">
                        <img src="../images/Servlet.jpg" id="Servlet-Example">
                    </div>
                    
                    <div class="Cycle-Photo">
                        <img src="../images/cycle.gif" id="Servlet-Example">
                    </div>
                    
               <div class="Topic-Space-2">
                   <div class="Java-Servlet-Space-Container">
                        <h2 id="Topic-Sub-Title">Servlet life cycle</h2>
                            <h3>Instantiation</h3>
                                <p>This is the first phase of the Servlet life cycle  and represents the creation and initialization of resources the Servlet may need to service requests.All Servlets must implement the javax.servlet.Servlet interface.This interface defines the init() method to match the initialization phase of a Servlet life cycle. When a container loads a Servlet, it invokes the init() method before servicing any requests.</p>

                            <h3>Service</h3>
                                <p>It represents all interactions with requests until the Servlet is destroyed. The service() method of a Servlet is invoked once per a request and is responsible for generating the response to that request. The Servlet specification defines the service() method to take two parameters: a javax.servlet.ServletRequest and a javax.servlet.ServletResponse object.</p>

                                <p>These two objects represent a client's request for the dynamic resource and the Servlet's response to the client. By default a Servlet is multi-threaded, meaning that typically only one instance of a Servlet1 is loaded by a JSP container at any given time.Initialization is done once, and each request after that is handled concurrently2 by threads executing the Servlet's service() method.</p>

                            <h3>Destruction</h3>
                                <p>It represents when a Servlet is being removed from use by a container.The destroy() method to correspond to the destruction life cycle phase. </p>

                                <p>Each time a Servlet is about to be removed from use, a container calls the destroy() method, allowing the Servlet to gracefully terminate and tidy up any resources it might have created.</p>
                   </div>
                </div>
                
                <div class="Topic-Space-3">
                   <div class="Java-Servlet-Space-Container">
                        <h2 id="Topic-Sub-Title">httpServlet</h2>
                        <p>Java servlet used to handle HTTP requests and generate HTTP responses.</p>  
                    
                        <p> -A subclass of HttpServlet must override at least one method, usually one of these:</p>
           
                        <p>~<em>doGet</em>, if the servlet supports HTTP GET requests</p>
                        <p>~<em>doPost</em>, for HTTP POST requests</p>
                        <p>~<em>doPut</em>, for HTTP PUT requests</p>
                        <p>~<em>doDelete</em>, for HTTP DELETE requests</p>
                        <p>~<em>init and destroy</em>, to manage resources that are held for the life   of the servlet</p>
                        <p>~<em>getServletInfo</em>, which the servlet uses to provide information about itself</p>
            
                        <p>There's almost no reason to override the service method. service handles standard HTTP requests by dispatching them to the handler methods for each HTTP request type (the doXXX methods listed above).</p>
                    
                        <p>Likewise, there's almost no reason to override the doOptions and doTrace methods.</p>
                    
                        <p>When the servlet container uses HTTP protocol to send request, then it creates HttpServletRequest and HttpServletResponse objects. HttpServletRequest binds the request information like header and request methods and HttpServletResponse binds all information of HTTP protocol.</p>
                    
                        <p>HttpServlet does not override in it or destroy method. However, it uses service (-,-) method. ServletRequest and ServletResponse references are cast into HttpServletRequest and HttpServletResponse, respectively.</p>
                    
                        <p>Hosted in a 'web container', which is a component in a Java 'application server' (e.g., Apache Tomcat, Red HotJBoss/WildFly, Oracle GlassFish, IBM WebSphere, etc.)</p>    
                    </div>
                    </div>
                </div>
                <button id="btn" onclick="myFunction()">Go Back!</button>
            </div>
         </div>
                  
        <div id = "f2" style="display:none">
                
            <div class="center-on-page">  
                <div class="container">
                    <header>
                        <h1 id=Topic1-Title>Session Handling</h1>
                    </header>
                    
               <div class="Topic-Space-4">
                   <div class="Java-Servlet-Space-Container">
                        <h2 id="Topic-Sub-Title">Session Handling in Java Servlet</h2>
                        <h3> What is a Session?</h3>
                            <p>Session is the communication between the client and the server that is compose of multiple requests and responses between client and server.It is being maitained if some information about the session is being passed between the server and client  everytime that there is a responses and requests that is happening.The Java servlets are server-side programs, which is running inside a web server, that handle clients' requests and return a customized or dynamic response for each request.</p>
                    </div>
                </div>
                    
                <div class="Topic-Space-5">
                   <div class="Java-Servlet-Space-Container">
                        <h2 id="Topic-Sub-Title">User Authentication </h2>
                    <p>User can give authentication credentials in order to pass authentication information between the server and client.</p>
                   </div>
                </div>
                    
                    <div class="User-Authentication-Photo">
                        <img src="../images/user-auth.png" id="Servlet-Example">
                    </div>
                    
                    <div class="User-Authentication-Photo">
                        <img src="../images/Cookies.png" id="Servlet-Example">
                    </div>
                 
                <div class="Topic-Space-6">
                   <div class="Java-Servlet-Space-Container">
                        <h2>HTML Hidden Field</h2>
                            <p>We can make unique hidden field in the HTML so users can start to navigate, we can set its value unique to the user and keep track of the session.</p>

                            <h2>URL Rewriting</h2>
                            <p>We can attach a session identifier parameter in every request and response to keep track of the session.</p>

                            <h2>Cookies</h2>
                            <p>Cookies are sent by the server with response header and it is being stored in the browser cookies.Everytime a  client create requests, it adds the cookie to the request header and we can utilize it to keep track of the session.</p>
                    </div>
                </div>
                    
                 
                    <h2>Session Management API</h2>
                    <p>It is built with the other methds for session tracking.</p>
                    
                    <h2>Session Handling in Java - Cookies</h2>
                    <p>It is used to personalize responses based on the users choice or to keeo in track in the session.It is used to personalize responses based on the users choice or to keep in track in the session.</p>
                    
                 <div class="Topic-Space-7">
                   <div class="Java-Servlet-Space-Container">     
                    <h2>Session Handling in Java Servlet - HTTPSession</h2>
                    <p>Servlet API gives Session management through the use of  HttpSession interface.HttpSession allows us to set objects as attributes that can be retrieved in future requests.</p>
                    
                    <p>Ways to provide an identifier:</p>
                    <div class="Inside-Space7">
                        <h3>HttpSession getSession()</h3>
                        <p>It returns a HTTPSession Object. It  returns a session object that is being attached with a request.</p>


                        <h3>HttpSession getSession(boolean flag)</h3>
                        <p>It returns a HTTPSession Object if a request contains a session otherwise it returns null.</p>
                        <p>Methods of HTTPSession:</p>
                        <h3>String getID()</h3>
                        <p>It returns a string containing the unique identifier assigned to this session.</p>

                        <h3> Object getAttribute(String name)</h3>
                        <p>It returns an object bound with the specified name in thie session, or null if no object is bound under the name.</p>

                         <p>Methods to work with Session attributes:</p>
                            <ul id="session-ul">
                                <li  id="session">getAttributeNames()</li> <li  id="session">removeAttribute(String name)</li>
                                <li  id="session">setAttribute(String name, Object value)</li>
                            </ul>

                        <h3> long getCreationTime()</h3>

                        <p>it returns the time when this session was created which was January 1, 1970. We can get last accessed time with getLastAccessedTime() method.</p>

                        <h3>setMaxInactiveInterval(int interval) </h3>
                         <p>It identifies the time, in seconds of  client's requests before the servlet container will invalidate this session. We can get session timeout value using the method getMaxInactiveInterval()</p>


                        <h3>ServletContext getServletContext()</h3>
                         <p>It returns the ServletContext object for the application.</p>

                         <h3>boolean isNew()</h3>
                         <p>It  returns true if the client does not yet know about the session or if the client chooses not to join the session. </p>

                        <h3>void invalidate()</h3>
                         <p>It invalidates a session then unbinds any objects bound to it.</p>
                        </div>
                     </div>
                    </div>
                    
                    <h2>Session Handling in Java Servlet - URL Rewriting</h2>
                    <p>We can encode URL with HttpServletResponse encodeURL() method and if we have to redirect the request to another resource and we want to provide session information, we can use encodeRedirectURL() method.</p>
                  
                <div class="Topic-Space-8">
                   <div class="Java-Servlet-Space-Container">  
                    <h2>Session Handling in PHP</h2>
                    <p>PHP is one of the widely used Server side scripting language. Session Handling supports in PHP that consists of a way to preserve specific data across subsequent accesses. </p>
                    
                    <p>List of PHP Functions:</p>
                        <ul id="session-ul">
                            <li id="session">session_start()</li>
                            <li id="session">session_isset()</li>
                            <li id="session">session_destroy()</li>
                            <li id="session">session_destroy()</li>
                            <li id="session">session_unset()</li>
                        </ul>
                    
                         <p>It starts new or resumes an existing session.</p>            </div>
                    </div>
                    
                    <div class="Session-Handling-Photo">
                        <img src="../images/sessionhandling.jpg" id="Servlet-Example">
                    </div>
                </div>
                <button id="btn" onclick="myFunction()">Go Back!</button>
            </div>
         </div>
                  
        <div id = "f3" style="display:none">
                
            <div class="center-on-page">  
                <div class="container">
                    <header>
                        <h1 id=Topic1-Title>PHP(Hypertext Preprocessor)</h1>
                    </header>
                    
                 <div class="Topic-Space-9">
                   <div class="Java-Servlet-Space-Container"> 
                        <h2>Brief History</h2>
                        <p>  PHP started as a small project that evolved and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994. PHP is a recursive acronym for "PHP: Hypertext Preprocessor". It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites. It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server. PHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time. </p>
                        <p>  PHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility.</p>
                     </div>
                    </div>
                    
                    <div class="PHP-Photo">
                        <img src="../images/phplogo.png" id="Servlet-Example">
                    </div>

                    <div class="Topic-Space-10">
                   <div class="Java-Servlet-Space-Container">
                        <h2>What is PHP?</h2>
                        <p>  PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. It is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.</p>
                        </div>
                    </div>
                    
                <div class="Topic-Space-11">
                   <div class="Java-Servlet-Space-Container">    
                        <h2>Common uses of PHP</h2>
                        <p> PHP performs system functions, i.e. from files on a system it can create, open, read, write, and close them. </p>
                        <p> PHP can handle forms, i.e. gather data from files, save data to a file, through email you can send data, return data to the user. </p>
                        <p>  Adding, deleting and modifying elements within the database through PHP.</p>
                        <p> Access cookies variables and set cookies. </p>
                        <p>Using PHP, you can restrict users to access some pages of your website.It can encrypt data. </p>
                    

                    <h2>Characteristics of PHP</h2>
                        <p>Five important characteristics make PHP's practical nature possible</p>
                            <ul id="session-ul">
                                <li id="session">Simplicity()</li>
                                <li id="session">Efficiency()</li>
                                <li id="session">Security()</li>
                                <li id="session">Flexibility()</li>
                                <li id="session">session_unset()</li>
                            </ul>
                       
                       <p>The main way to store information in the middle of a PHP program is by using a variable. </p>
                    </div>
                </div>


                <div class="Topic-Space-12">
                       <div class="Java-Servlet-Space-Container"> 
                           <h3>Here are the most important things to know about variables in PHP.</h3>
                                <p> All variables in PHP are denoted with a leading dollar sign ($).</p>
                                <p> The value of a variable is the value of its most recent assignment. </p>
                                <p> Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right. </p>
                                <p> Variables can, but do not need, to be declared before assignment. </p>
                                <p> Variables in PHP do not have intrinsic types - a variable does not know in advance whether it will be used to store a number or a string of characters. </p>
                                <p> Variables used before they are assigned have default values. </p>
                                <p> PHP does a good job of automatically converting types from one to another when necessary. </p>
                           <p> PHP variables are Perl-like. </p>
                           
                            <h3>PHP has a total of eight data types which we use to construct our variables </h3>
                                <p> Integers are whole numbers, without a decimal point, like 4195. </p>
                                <p> Doubles are floating-point numbers, like 3.14159 or 49.1. </p>
                                <p> Booleans have only two possible values either true or false. </p>
                                <p> NULL is a special type that only has one value: NULL. </p>
                                <p> Strings are sequences of characters, like 'PHP supports string operations.'</p>
                                <p> Arrays are named and indexed collections of other values. </p>
                                <p> Objects are instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class. </p>
                                <p> Resources are special variables that hold references to resources external to PHP (such as database connections). </p>
                           </div>
                </div>
                    <div class="Topic-Space-12">
                       <div class="Java-Servlet-Space-Container"> 
                            <h2>A few "magical" PHP constants are given below</h2>
                             <div class="Inside-Space12">
                                <h3>LINE</h3>
                                    <p>The current line number of the file. </p>

                                <h3>FILE</h3>
                                    <p>The full path and filename of the file. If used inside an include,the name of the included file is returned. Since PHP 4.0.2, __FILE__always contains an absolute path whereas in older versions it contained relative path under some circumstances. </p>

                                <h3>FUNCTION</h3>
                                    <p>The function name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the function name as it was declared (case-sensitive). In PHP 4 its value is always lowercased. </p>

                                <h3>CLASS</h3>
                                    <p>The class name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the class name as it was declared (case-sensitive). In PHP 4 its value is always lowercased. </p>

                                <h3>METHOD</h3>
                                    <p>The class method name. (Added in PHP 5.0.0) The method name is returned as it was declared (case-sensitive). </p>
                           </div>
                           
                            <h2>Common Associative Arrays</h2>
                            <div class="Inside-Space12">
                                    <h3>$_POST</h3>
                                            <p>fields from form tags</p>
                                    <h3>$_GET</h3>
                                            <p>fields from URL arguments</p>
                                    <h3>$_SERVER</h3>
                                            <p>common system-oriented information</p>
                                    <h3>$_COOKIES</h3>
                                            <p>fields from browser cookies</p>
                                    <h3>$_SESSION</h3>
                                            <p>fields for user authentication</p>
                                    <h3>$GLOBALS</h3>
                                            <p>all global variables</p>  
                           </div>
                        </div>
                    </div>


                </div>
                <button id="btn" onclick="myFunction()">Go Back!</button>
            </div>
         </div>
                  
        <div id = "f4" style="display:none">
                
            <div class="center-on-page">  
                <div class="container">
                    <header>
                        <h1 id=Topic1-Title>Node.js</h1>
                    </header>
                    
                    <h2>What is Node.js? </h2>
                    <p>Node.js is a JavaScript run-time environment. It is a JavaScript runtime built on Chromes V8 JavaScript engine.It uses an event-driven, non-blocking I/O model that makes it lightweight and well-organized.</p>
                    <p>Node.js package ecosystem is the largest ecosystem of open source libraries in the world which is npm.Node.js is a free and an open source server environmentIt runs on different types of platforms such as Windows, Linux, Unix, Mac OS X.It uses JavaScript on the server. The Node run-time environment contains everything a user may need in order to execute a program written in JavaScript.</p>
                    <p>Node.js came became real when the original developers of JavaScript extended it from something a user could only run in a browser into something they could run on their device as a standalone application.</p>
                    <p>Both your browser JavaScript and Node.js run on the V8 JavaScript runtime engine. This engine takes your JavaScript code and converts it into a faster machine code. Machine code is low level code which the computer can run without needing to first interpret it.</p>
                       
                    <h2>Input/ Output (I/O)</h2>
                    <p>It can be anything that ranges from reading/writing local files to making an HTTP request to an API.</p>
                    
                    <h2>Blocking I/O (left) vs Non-Blocking I/O (right)</h2>
                        <div class="Blocking">
                            <h2>Blocking I/O</h2>
                            <p>In this method, the request of a user bs data is not initiated until user as data is being displayed to the screen.</p>
                            <h2>Non-Blocking I/O</h2>
                            <p>A user can initiate a data request for user b without waiting for the response the request for user a. A user can initiate both requests in parallel.This non-blocking, I/O removes the need for multi-threading, since the server can handle multiple requests at the same time.
                        </div>

                        <h2>File request using PHP or ASP</h2>
                            <ol id="session-ul">
                                <li id="session">Sends the task to the computer's file system.()</li>
                                <li id="session">Waits while the file system opens and reads the file.()</li>
                                <li id="session">Returns the content to the client.()</li>
                                <li id="session">Ready to handle the next request.()</li>
                            </ol>
                      
                    
                    <h2>File request using Node.js</h2>               
                        <ol id="session-ul">
                                <li id="session">Sends the task to the computer's file system.</li>
                                <li id="session">Ready to handle the next request.</li>
                                <li id="session">When the file system has opened and read the file, the server returns the content to the client.</li>
                            </ol>
                    <h3>Note:</h3>
                    <p>Node.js removes the waiting, and continues with the next request.</p>
                    <p>It runs single-threaded, non-blocking, asynchronously programming, which is very memory efficient.</p>
                    
                    <h2>What can Node.js do?</h2>
                    <p>It generates a dynamic page content</p>
                    <p>Create, open, read, write, delete, and close files on the server</p>
                    <p>It can collect form data</p>
                    <p>Add, delete, modify data in your database</p>
                    
                    <h2>What is a Node.js File? </h2>
                    <p>It contains tasks that will be implemented on certain events</p>
                    <p>Node.js files must be initiated on the server before having any effect </p>
                    <p> Node.js files have extension ".js"</p>
                    
                    <div class="JS-Module">
                        <h2>Node.js Modules</h2>
                        <h3>What is a Module in Node.js?</h3>
                        <p>A set of functions a user desires to include in a application.</p>

                        <h3>Built-in Modules</h3>
                        <p>Contains a set of built-in modules which a user can use without installing it.</p>

                         <h3>Include Modules</h3>
                        <p>Uses  require() function with the name of the module:</p>
                    </div>
                    
                    <div class="Code1">
                        <img src="../images/Code1.jpg" class="code">
                    </div>
                    
                <h2>Creating Own Modules</h2>
                    <p>A user can create their own modules, and easily include them in their applications.</p>
                    <p>It uses the exports keyword to make methods available outside the module file.</p>
                    
                    <img src="../images/code2.jpg">
                    
                <h2>Including Own Module</h2>
                    <img src="../images/code3.jpg">
                    
             <h2>Node.js HTTP Module</h2> 
                    <h2>The Built-in HTTP Module</h2>
                    <p>Contains a built-in module called HTTP, which allows Node.js to move data over the Hyper Text Transfer Protocol (HTTP).</p>
                    <p>It uses  the require() method to add a HTTP module:</p>
                    <img src="../images/code4.jpg">
                    
            <h2>Node.js as a Web Server</h2>
                    <p>The HTTP module can make an HTTP server that listens to server ports and provides a response back to the client.</p>
                    <p>Use the createServer() method to create an HTTP server:</p>
                    
                    <img src="../images/code5.jpg">
                    
            <h2>Adding HTTP Header</h2>
            <p>If the response from the HTTP server is meant to be shown as HTML, the user should comprise  an HTTP header with the correct content type: </p>
                    
                    <img src="../images/code6.jpg">
                    
            <h2>Reaading Query String</h2>
                <p>The function passed into the http.createServer() has a req argument that represents the request from the client, as an object (http.IncomingMessage object).</p>
                    <p>This object has a property called "url" which holds the part of the url that comes after the domain name:</p>  
                    
                    <img src="../images/code7.jpg">
                    
                    
        <h2>Splitting Query String</h2>
                    <p>There are built-in modules to split the query string into readable parts, such as the URL module.</p>    
                    
                    <img src="../images/code8.jpg">
                    
            <h2>Node.js File System Module</h2>
                    <h2> Node.js as a File Server</h2>
                <p>The Node.js file system module let a user work with the file system on a computer.</p>
                    <p>Uses the require() method to include the File System module</p>
                    
                    <img src="../images/code9.jpg">
                    
                    <h2>Common use for the File System module:</h2>
                            <ol id="session-ul">
                                <li id="session">Read files</li>
                                <li id="session">Create files</li>
                                <li id="session">Update files</li>
                                <li id="session">Delete files</li>
                                <li id="session">Rename files</li>
                            </ol>
                    
                    <h2>Read Files</h2>
                    <p>The fs.readFile() method is used to read files on your computer.</p>
                    
                        <img src="../images/code10.jpg">
                    
                   <h2>Create Files</h2>
                    <p>The File System module has methods for creating new files:</p>
                    <p>fs.appendFile()</p>
                    <p>The fs.appendFile() method appends specified content to a file. If the file does not exist, the file will be created:</p>
                    
                        <img src="../images/code11.jpg">
                    
                    <p>fs.open()</p>
                    <p>The fs.open() method gest a "flag" as the second argument, if the flag is "w" for "writing", the specified file is opened for writing. If the file does not exist, an empty file is created:	</p>
                        <img src="../images/code12.jpg">
                    
                    <p>fs.writeFile()</p>
                    <p>The fs.writeFile() method exchanges the specific file and content if it exists. If the file does not exist, a new file, containing the specified content, will be created:</p>
                    
                        <img src="../images/code13.jpg">
                    
            <h2>Update Files</h2>   
            <p>The File System module has methods for updating files:</p>
                    <p>fs.appendFile()</p>
                    <p>The fs.appendFile() method appends the specified content at the end of the specified file:</p>
                    
                        <img src="../images/code14.jpg">
                    
                    <p>fs.writeFile()</p>
                    <p>The fs.writeFile() method takes place the specified file and content:</p>
                    
                        <img src="../images/code15.jpg">
                    
                <h2>Delete Files</h2>    
                    <p>Use the fs.unlink() method to delete a file with the File System module.</p>
                    <p>The fs.unlink() method deletes the specified file:</p>
                    
                        <img src="../images/code16.jpg">
                    
                    <h2>Rename Files</h2>
                    <p>Use the fs.rename() method to rename a file with the File System module</p>
                    <p>The fs.rename() method renames the specified file:</p>
                        
                        <img src="../images/code17.jpg">
                    
                    
              <h2>Node.js Upload Files</h2>      
                    <h2>The Formidable Module</h2>
                    <p>There is a very good module for working with file uploads, called "Formidable". The Formidable module can be downloaded and installed using NPM: </p>
                    
                        <img src="../images/code18.jpg">
                    
                    <p>After you have downloaded the Formidable module, you can include the module in any application:</p>
                    
                        <img src="../images/code19.jpg">
                    
                   <h2>	Upload Files</h2>
                    <p>1.	Creating an Upload Form</p>
                    <p>Create a Node.js file that writes an HTML form, with an upload field:</p>
                    
                        <img src="../images/code20.jpg">
                    
                    <p>2.	Parsing the Uploaded File </p>
                    <p>Include the Formidable module to be able to parse the uploaded file once it reaches the server.
When the file is uploaded and parsed, it gets placed on a temporary folder on your computer.
</p>
                    <img src="../images/code21.jpg">
                    
                    
            <p>3. Save the File</p>
                    <p>When a file is successfully uploaded to the server, it is located on a temporary folder.</p> 
                    <p>The path to this directory can be found in the "files" object, passed as the third argument in the parse() method's callback function.</p> 
                    <p>To move the file to the folder of your choice, use the File System module, and rename the file:</p>
                    
                    <img src="../images/code22.jpg">
             
            <h2>Node.js Events</h2>
             <h3>Events in Node.js</h3> 
                    <p>Objects in Node.js can fire events, like the readStream object fires events when opening and closing a file:</p>
                    
                    <img src="../images/code23.jpg">
                    
            <h3>Events Module</h3>
                   <p>Node.js has a built-in module, called "Events", where you can create-, fire-, and listen for- your own events</p> 
                    <p>Use the require() method to include the built-in Events module. </p> 
                    <p>All event properties and methods are an instance of an EventEmitter object. </p> 
                    <p>To be able to access these properties and methods, create an EventEmitter object:</p> 
                    
                    <img src="../images/code24.jpg">
                    
              <h3>The EventEmitter Object</h3>    
                <p>You can assign event handlers to your own events with the EventEmitter object. To fire an event, use the emit() method.</p>
                    
                <img src="../images/code25.jpg">
       
            </div>
                <button id="btn" onclick="myFunction()">Go Back!</button>
            </div>
         </div>
                  
         <div id = "f5" style="display:none">
                
            <div class="center-on-page">  
                <div class="container">
                    <header>
                        <h1 id=Topic1-Title>JSP (Java Server Pages) </h1>
                    </header>
                    
                    <h2>What is JSP? </h2>
                    <p>JSP technology is used to generate a web application just like Servlet technology. It can be considered as an extension to servlet because it offers more functionality than servlet such as expression language, jstl etc. A JSP page contains HTML tags and JSP tags. The jsp pages are easier to sustain than servlet because we can separate designing and development.</p>
                            
					<h2>Advantages of JSP over Servlet</h2>
                    <p>The File System module has methods for creating new files:</p>
                    <h3>Extension to Servlet</h3>
					<p>It uses all the features of servlet in JSP. In addition, it can use implied objects, predefined tags, expression language and Custom tags in JSP, that makes JSP development easy.</p>
					
					<h3>Easy to maintain</h3>
					<p>It can be easily achieved because it can easily separate business reason with presentation logic. </p>
					
					<h3>Fast Development</h3>
					<p>There is no need to recompile and redeploy. If JSP page is modified, There is  need to recompile and redeploy the project. The servlet code needs to be updated and recompiled if we have to change the look and feel of the application. </p>
					
					<h3>Less code than Servlet</h3>
					<p>It uses a lot of tags such as action tags, jstl, custom tags etc. that reduces the code. Moreover, it can use EL, implicit objects etc.</p>
					
					<h2>Life cycle of a JSP Page</h2>
					<p>	Translation of JSP Page</p>
					<p>	Compilation of JSP Page</p>
					<p>	Classloading (class file is loaded by the classloader)</p>
					<p>	Instantiation (Object of the Generated Servlet is created).</p>
					<p>	Initialization ( jspInit() method is invoked by the container).</p>
					<p>	Reqeust processing ( _jspService() method is invoked by the container).</p>
					<p>	Destroy ( jspDestroy() method is invoked by the container).</p>
					
					<h2>JSP Scriptlet tag (Scripting elements)</h2>
					<p>In JSP, java code can be written inside the jsp page using the scriptlet tag. </p>
					
					<h3>JSP Scripting elements</h3>
					<p>The scripting elements provides the ability to insert java code inside the jsp. There are three types of scripting elements:</p>
					<p> scriptlet tag </p>
					<p>expression tag </p>
					<p>declaration tag </p>

					<h3>JSP scriptlet tag</h3>
					<pre>
					<code>
					%  java source code %  
					</code>
					</pre>
					
					<h3>JSP expression tag</h3>
					<p>The code placed within JSP expression tag is written to the output stream of the response. So there is no need to write out.print() to write data. It is mainly used to print the values of variable or method.</p>
					
					<h3>JSP Declaration Tag</h3>
					<p>It is used to declare fields and methods.</p>
				    
					<h2>Difference between JSP Scriptlet tag and Declaration tag</h2>
					
					<h3>Jsp Scriptlet Tag</h3>
					<p>The jsp scriptlet tag can only declare variables not methods.</p>
					
					<h3>Jsp Declaration Tag</h3>
					<p>The jsp declaration tag can declare variables as well as methods.</p>
						
					<h2>SP Implicit Objects</h2>
					<p>There are 9 jsp implicit objects. These objects are created by the web container that are available to all the jsp pages and theses are:</p>
						
					<h3>JSP out implicit object</h3>
					<p>For writing any data to the buffer, JSP provides an implicit object named out. It is the object of JspWriter. </p>
					
					<h3>JSP request implicit object</h3>
					<p>The JSP request is an implicit object of type HttpServletRequest and it can be used to get request data such as parameter, header information, remote address, server name, server port, content type andcharacter encoding </p>
					
					<h3>JSP response implicit object</h3>
					<p>In JSP, response is an implicit object of type HttpServletResponse. The instance of HttpServletResponse is created by the web container for each jsp request. It can also be used to add or manipulate response such as redirect response to another resource, send error etc.</p>
					
					<h3>JSP config implicit object</h3>
					<p>In JSP, config is an implicit object of type ServletConfig. This object can be used to get initialization parameter for a particular JSP page. The config object is created by the web container for each jsp page. In general, it is used to get initialization parameter from the web.xml file.</p>
					
					<h3>JSP application implicit object</h3>
					<p>In JSP, application is an implicit object of type ServletContext which is created only once by the web container when application or project is deployed on the server.</p>
					
					<p>This object can be used to get initialization parameter from configuaration file (web.xml). It can also be used to get, set or remove attribute from the application scope.</p>
					
					<h3> Session implicit object</h3>
					<p>TIn JSP, session is an implicit object of type HttpSession.The Java developer can use this object to set, get or remove attribute or to get session information.</p>
					
					
					<h3> pageContext implicit object</h3>
					<p>It is an implicit object of type PageContext class.The pageContext object can be used to set, get or remove attribute from one of the following scopes:</p>
					
					<p>  page</p>
					<p>  request</p>
					<p>  session</p>
					<p>  application</p>
					
					
					<h3> page implicit object</h3>
					<p>It is an implicit object of type Object class. This object is assigned to the reference of auto generated servlet class. </p>
					
					<h3> exception implicit object</h3>
					<p>It is an implicit object of type java.lang.Throwable class. This object can be used to print the exception. But it can only be used in error pages.</p>
					
                    <h2>JSP directives</h2>
					
					<p>The jsp directives are messages that tells the web container how to translate a JSP page into the corresponding servlet. There are three types of directives:</p>
					
					<p> page directive</p>
					<p> include directive</p>
					<p> taglib directive</p>

					
					<h2>A.   JSP page directive</h3>
					<p>The page directive defines attributes that apply to an entire JSP page.</p>
					
					<h2>Attributes of JSP page directive</h3>
					
					<h3>import</h4>
					<p>The import attribute is used to import class, interface or all the members of a package. It is similar to import keyword in java class or interface.</p>
					
					<h4>contentType</h4>
					<p>It defines the MIME (Multipurpose Internet Mail Extension) type of the HTTP response. The default value is "text/html;charset=ISO-8859-1".</p>
					
					<h4>extends</h4>
					<p>The extends attribute defines the parent class that will be inherited by the generated servlet.</p>
					
					
					<h4>info</h4>
					<p>This attribute simply sets the information of the JSP page which is retrieved later by using getServletInfo() method of Servlet interface.</p>
					
					<h4>import</h4>
					<p>The page directive defines attributes that apply to an entire JSP page.</p>
					
					<h4>buffer</h4>
					<p>The buffer attribute sets the buffer size in kilobytes to handle output generated by the JSP page. The default size of the buffer is 8Kb.</p>
					
					<h4>language</h4>
                    <p>The language attribute specifies the scripting language used in the JSP page. The default value is "java".</p>
					
					<h4>isELIgnored</h4>
                    <p>We can ignore the Expression Language (EL) in jsp by the isELIgnored attribute. By default, its value is false i.e. Expression Language is enabled by default.</p>
					
					<h4>isThreadSafe</h4>
                    <p>Servlet and JSP both are multithreaded. If you want to control this behaviour of JSP page, you can use isThreadSafe attribute of page directive.The value of isThreadSafe value is true.If you make it false, the web container will serialize the multiple requests.</p>
					
					<h4>errorPage</h4>
                    <p>The errorPage attribute is used to define the error page, if exception occurs in the current page, it will be redirected to the error page.</p>
					
					<h4>isErrorPage</h4>
                    <p>The isErrorPage attribute is used to declare that the current page is the error page.</p>
					
					<h3>B.	Jsp Include Directive</h3>
					<p>It is used to include the contents of any resource it may be jsp file, html file or text file. It includes the original content of the included resource at page translation time </p>
					
					<h3>C.	JSP Taglib directive</h3>
					<p>It is used to define a tag library that defines many tags. We use the TLD (Tag Library Descriptor) file to define the tags. In the custom tag section, we will use this tag so it will be better to learn it in custom tag.</p>
					
					<h2>Exception Handling in JSP</h2>
					<p>The exception is normally an object that is thrown at runtime. Exception Handling is the process to handle the runtime errors. There may occur exception any time in your web application. So handling exceptions is a safer side for the web developer. In JSP, there are two ways to perform exception handling:</p>
					
					<p>1. By errorPage and isErrorPage attributes of page directive</p>
					<p>2. By error-page element in web.xml file</p>
					
					<h2>JSP Action Tags</h2>
					<p>There are many JSP action tags or elements. Each JSP action tag is used to perform some specific tasks.The action tags are used to control the flow between pages and to use Java Bean. The Jsp action tags are the following:</p>
					
					<h3>Jsp:forward action tag</h3>
					<p>It is used to forward the request to another resource it may be jsp, html or another resource.</p>
					
					<h3>jsp:include action tag</h3>
					<p>It is used to include the content of another resource it may be jsp, html or servlet.</p>
					<p>It includes the resource at request time so it is better for dynamic pages because there might be changes in future.</p>
					
					<h2>Difference between jsp include directive and include action</h2>
					
					<h3>JSP include directive</h3>
					<p>includes resource at translation time.</p>
					<p>better for static pages.</p>
					<p>includes the original content in the generated servlet.
					</p>
			
					<h3>JSP include action</h3>
					<p>includes resource at request time.</p>
					<p>better for dynamic pages.</p>
					<p>calls the include method.</p>

					<h3>jsp:useBean action tag</h3>
					<p>It is used to locate or instantiate a bean class. If bean object of the Bean class is already created, it doesn't create the bean depending on the scope. But if object of bean is not created, it instantiates the bean.</p>
					
					<h2>Attributes and Usage of jsp:useBean action tag</h2>
					<p>a.	id: is used to identify the bean in the specified scope.</p>
					<p>b.	scope: represents the scope of the bean. It may be page, request, session or application. The default scope is page.</p>
							<p>i.	page: specifies that you can use this bean within the JSP page. The default scope is page.</p>
							<p>ii.	request: specifies that you can use this bean from any JSP page that processes the same request. session: specifies that you can use this bean from any JSP page in the same session whether processes the same request or not. </p>
							<p>iii.	application: specifies that you can use this bean from any JSP page in the same application. </p>
					<p>c.	class: instantiates the specified bean class but it must have no-argument or no constructor and must not be abstract.</p>
					<p>d.	type: provides the bean a data type if the bean already exists in the scope. It is mainly used with class or beanName attribute. If you use it without class or beanName, no bean is instantiated.</p>
					<p>e.	beanName: instantiates the bean using the java.beans.Beans.instantiate() method.</p>

					<h3>jsp:setProperty and jsp:getProperty action tags</h3>
					<p>The setProperty and getProperty action tags are used for developing web application with Java Bean. Bean class is mostly used because it is a reusable software component that represents data and it sets a property value or values in a bean using the setter method.</p>
					
					<h3>jsp:plugin action tag</h3>
					<p>It is used to embed applet in the jsp file. The jsp:plugin action tag downloads plugin at client side to execute an applet or bean.</p>
					
					
					<h2>Custom Tags in JSP</h2>
					<p>Custom tags are user-defined tags which eliminate the possibility of scriptlet tag and separates the business logic from the JSP page.</p>
                   
					<h3>Advantages of Custom Tags</h3>
					<h4>Eliminates the need of scriptlet tag </h4>
					<p>The custom tags eliminate the need of scriptlet tag which is considered bad programming approach in JSP.</p>
					
					<h4>Separation of business logic from JSP </h4>
					<p>The custom tags separate the business logic from the JSP page so that it may be easy to maintain.</p>
					
					<h4>Re-usability </h4>
					<p>The custom tags make the possibility to reuse the same business logic again and again.</p>
					
					<h3>A.	Attributes in JSP Custom Tag</h3>
					<p>To define the attribute, you need to perform two tasks:</p>
						<p>Define the property in the TagHandler class with the attribute name and define the setter method</p>
						<p>Define the attribute element inside the tag element in the TLD file</p>
					
					<h3>B.	Iteration using JSP Custom Tag</h3>
					<p>You can iterate the body content of any tag using the doAfterBody() method of IterationTag interface.</p>

                 </div>
                <button id="btn" onclick="myFunction()">Go Back!</button>
            </div>
         </div>         
          
                  
        <div id = "f6" style="display:none">
                
            <div class="center-on-page">  
                <div class="container">
                    <header>
                        <h1 id=Topic1-Title>Web Application Security </h1>
                    </header>
                    
                    <h2>Open Web Application Security Project (OWASP)</h2>

<p>The Open Web Application Security Project (OWASP) is a 501(c)(3) worldwide not-for-profit charitable organization focused on improving the security of software. Our mission is to make software security visible, so that individuals and organizations are able to make informed decisions. OWASP is in a unique position to provide impartial, practical information about AppSec to individuals, corporations, universities, government agencies and other organizations worldwide. Operating as a community of like-minded professionals, OWASP issues software tools and knowledge-based documentation on application security.</p>

<p>OWASP seeks to educate developers, designers, architects and business owners about the risks associated with the most common Web application security vulnerabilities. OWASP, which supports both open source and commercial security products, has become known as a forum in which information technology professionals can network and build expertise. The organization publishes a popular Top Ten list that explains the most dangerous Web application security flaws and provides recommendations for dealing with those flaws.</p>

<p>OWASP tools, document and code library projects are organized into three categories, tools and documents that can be used to find security-related design and implementation flaws, tools and documents that can be used to guard against security-related design and implementation flaws and tools and documents that can be used to add security-related activities into the application  lifecycle management (ALM). </p>

<h2>The OWASP Foundation</h2>
<p>The OWASP Foundation came online on December 1st 2001 it was established as a not-for-profit charitable organization in the United States on April 21, 2004 to ensure the ongoing availability and support for our work at OWASP. OWASP is an international organization and the OWASP Foundation supports OWASP efforts around the world. OWASP is an open community dedicated to enabling organizations to conceive, develop, acquire, operate, and maintain applications that can be trusted. All of the OWASP tools, documents, forums, and chapters are free and open to anyone interested in improving application security. We advocate approaching application security as a people, process, and technology problem because the most effective approaches to application security include improvements in all of these areas. We can be found at www.owasp.org.</p>


<p>OWASP is a new kind of organization. Our freedom from commercial pressures allows us to provide unbiased, practical, cost-effective information about application security. OWASP is not affiliated with any technology company, although we support the informed use of commercial security technology. Similar to many open-source software projects, OWASP produces many types of materials in a collaborative and open way. The OWASP Foundation is a not-for-profit entity that ensures the project's long-term success.</p>

<h2>Core Values</h2>
<p>OPEN Everything at OWASP is radically transparent from our finances to our code.</p>

<p>INNOVATION OWASP encourages and supports innovation and experiments for solutions to software security challenges.</p>

<p>GLOBAL Anyone around the world is encouraged to participate in the OWASP community.</p>

<p>INTEGRITY OWASP is an honest and truthful, vendor neutral, global community.</p>


<h2>Core Purpose</h2>
<p>Be the thriving global community that drives visibility and evolution in the safety and security of the world’s software.</p>


<h2>Code of Ethics</h2>
<p>Each of us is expected to behave according to the principles contained in the following Code of Ethics. Breaches of the Code of Ethics may result in the foundation taking disciplinary action.</p>

<p>Perform all professional activities and duties in accordance with all applicable laws and the highest ethical principles;</p>
<p>Promote the implementation of and promote compliance with standards, procedures, controls for application security;</p>
<p>Maintain appropriate confidentiality of proprietary or otherwise sensitive information encountered in the course of professional activities;</p>
<p>Discharge professional responsibilities with diligence and honesty;</p>
<p>To communicate openly and honestly;</p>
<p>Refrain from any activities which might constitute a conflict of interest or otherwise damage the reputation of employers, the information security profession, or the Association;</p>
<p>To maintain and affirm our objectivity and independence;</p>
<p>To reject inappropriate pressure from industry or others;</p>
<p>Not intentionally injure or impugn the professional reputation of practice of colleagues, clients, or employers;
<p>Treat everyone with respect and dignity; and</p>
<p>To avoid relationships that impair — or may appear to impair — OWASP's objectivity and independence.</p>

<h2>Principles</h2>
<p>Free and Open</p>
<p>Governed by rough consensus and running code</p>
<p>Abide by a code of ethics (see ethics)</p>
<p>Not-for-profit</p>
<p>Not driven by commercial interests</p>
<p>Risk based approach</p>

                    <h2 id="Top10">Top 10  Application Security Risks as of 2017</h2>
                        <div class="Inside-SpaceTop">
                    <h3>Injection</h3>

                    <p>Injection flaws, such as SQL, NoSQL, OS, and LDAP injection, occur when untrusted data is sent to an interpreter as part of a command or query. The attacker's hostile data can trick the interpreter into executing unintended commands or accessing data without proper authorization.</p>


                    <h3>Broken Authentication</h3>

                    <p>Application functions related to authentication and session management are often implemented incorrectly, allowing attackers to compromise passwords, keys, or session tokens, or to exploit other implementation flaws to assume other users' identities temporarily or permanently.</p>


                    <h3>Sensitive Data Exposure</h3>

                    <p>Many web applications and APIs do not properly protect sensitive data, such as financial, healthcare, and PII. Attackers may steal or modify such weakly protected data to conduct credit card fraud, identity theft, or other crimes. Sensitive data may be compromised without extra protection, such as encryption at rest or in transit, and requires special precautions when exchanged with the browser.</p>

                    <h3>XML External Entities (XXE)</h3>

                    <p>Many older or poorly configured XML processors evaluate external entity references within XML documents. External entities can be used to disclose internal files using the file URI handler, internal file shares, internal port scanning, remote code execution, and denial of service attacks.</p>

                    <h3>Broken Access Control</h3>

                    <p>Restrictions on what authenticated users are allowed to do are often not properly enforced. Attackers can exploit these flaws to access unauthorized functionality and/or data, such as access other users' accounts, view sensitive files, modify other users' data, change access rights, etc.</p>

                    <h3>Security Misconfiguration</h3>

                    <p>Security misconfiguration is the most commonly seen issue. This is commonly a result of insecure default configurations, incomplete or ad hoc configurations, open cloud storage, misconfigured HTTP headers, and verbose error messages containing sensitive information. Not only must all operating systems, frameworks, libraries, and applications be securely configured, but they must be patched/upgraded in a timely fashion.</p>

                    <h3>Cross-Site Scripting (XSS)</h3>

                    <p>XSS flaws occur whenever an application includes untrusted data in a new web page without proper validation or escaping, or updates an existing web page with user-supplied data using a browser API that can create HTML or JavaScript. XSS allows attackers to execute scripts in the victim's browser which can hijack user sessions, deface web sites, or redirect the user to malicious sites.</p>

                    <h3>Insecure Deserialization</h3>

                    <p>Insecure deserialization often leads to remote code execution. Even if deserialization flaws do not result in remote code execution, they can be used to perform attacks, including replay attacks, injection attacks, and privilege escalation attacks.</p>

                    <h3>Using Components with Known Vulnerabilities</h3>

                    <p>Components, such as libraries, frameworks, and other software modules, run with the same privileges as the application. If a vulnerable component is exploited, such an attack can facilitate serious data loss or server takeover. Applications and APIs using components with known vulnerabilities may undermine application defenses and enable various attacks and impacts.</p>

                    <h3>Insufficient Logging and Monitoring</h3>

                    <p>Insufficient logging and monitoring, coupled with missing or ineffective integration with incident response, allows attackers to further attack systems, maintain persistence, pivot to more systems, and tamper, extract, or destroy data. Most breach studies show time to detect a breach is over 200 days, typically detected by external parties rather than internal processes or monitoring.</p>
                    </div>
                </div>
                <button id="btn" onclick="myFunction()">Go Back!</button>
            </div>
         </div> 
        

<script>
   function showForm() {
       var selopt = document.getElementById("opts").value;
       if (selopt == 1) {
           document.getElementById("f1").style.display = "block";
           document.getElementById("f2").style.display = "none";
           document.getElementById("f3").style.display = "none";
           document.getElementById("f4").style.display = "none";
           document.getElementById("f5").style.display = "none";
           document.getElementById("f6").style.display = "none";
       }
       if (selopt == 2) {
           document.getElementById("f2").style.display = "block";
           document.getElementById("f1").style.display = "none";
           document.getElementById("f3").style.display = "none";
           document.getElementById("f4").style.display = "none";
           document.getElementById("f5").style.display = "none";
           document.getElementById("f6").style.display = "none";
       }
       if (selopt == 3) {
           document.getElementById("f3").style.display = "block";
           document.getElementById("f1").style.display = "none";
           document.getElementById("f2").style.display = "none";
           document.getElementById("f4").style.display = "none";
           document.getElementById("f5").style.display = "none";
           document.getElementById("f6").style.display = "none";
       }
       if (selopt == 4) {
           document.getElementById("f4").style.display = "block";
           document.getElementById("f3").style.display = "none";
           document.getElementById("f2").style.display = "none";
           document.getElementById("f1").style.display = "none";
           document.getElementById("f5").style.display = "none";
           document.getElementById("f6").style.display = "none";
       }
       if (selopt == 5) {
           document.getElementById("f5").style.display = "block";
           document.getElementById("f4").style.display = "none"; 
           document.getElementById("f3").style.display = "none";
           document.getElementById("f2").style.display = "none";
           document.getElementById("f1").style.display = "none";
           document.getElementById("f6").style.display = "none";
       }
       
       if (selopt == 6) {
           document.getElementById("f6").style.display = "block";
           document.getElementById("f5").style.display = "none";
           document.getElementById("f4").style.display = "none";
           document.getElementById("f3").style.display = "none";
           document.getElementById("f2").style.display = "none";
           document.getElementById("f1").style.display = "none";
       }
   }
    
    function myFunction() {
        location.reload();
    }
</script>
</body>
</html>