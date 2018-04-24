<?php
    header("HTTP/1.1 200 OK");
    header("Content-Type: text/html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Demo: Hello, PHP!</title>
</head>
<body>
    <?php 
        $current_date = date("l, d F Y h:i:s A", time());
        $user_agent_string = $_SERVER["HTTP_USER_AGENT"];

        echo "<h1>Hello, PHP!</h1>"; 
        echo "<h2>The server date and time is: " . $current_date . "</h2>";
        echo "<h2>Your browser UA string is: " . $user_agent_string . "</h2>";

        // echo "<pre>" . json_encode($_SERVER, JSON_PRETTY_PRINT) . "</pre>";
    ?>
</body>
</html>
