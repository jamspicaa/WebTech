<?php
    $filename = "images/" . $_GET["filename"] . ".png";

    $file = fopen($filename, "r");

    if ($file) {
        header("Content-Type: image/png");
        echo fread($file, filesize($filename));
        fclose($file);
        
    } else {
        header("HTTP/1.1 404 Not Found");
    }
