<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Demo: Handling File Uploads</title>
</head>
<body>
    <?php
        $fname = $_FILES["file"]["name"];
        $fsize = $_FILES["file"]["size"];

        $tmp = $_FILES["file"]["tmp_name"];
        $dest = $_SERVER["DOCUMENT_ROOT"] . "/php/uploads/$fname";

        move_uploaded_file($tmp, $dest);
        
        echo "<h1>Hi, $_POST[yourname]!</h1>";
        echo "<h2>Your file has been uploaded.</h2>";

        echo "<h3>File Name: $fname</h3>";
        echo "<h3>File Size: $fsize byte(s)</h3>";
    ?>
</body>
</html>
