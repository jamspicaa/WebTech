<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Demo: Handling Form Data Submission (GET)</title>
</head>
<body>
    <?php
        $name = $_GET["yourname"];
        $color = $_GET["favcolor"];

        echo "<h1 style='color: $color'>Hello, $name!</h1>";
    ?>
</body>
</html>
