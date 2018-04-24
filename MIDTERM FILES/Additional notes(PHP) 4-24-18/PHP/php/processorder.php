<?php
    $sizes = $_POST['size'];
    $colors = $_POST['color'];
    $custname = $_POST['custname'];

    $sizes = isset($sizes) ? implode(', ', $sizes) : 'None';
    $colors = isset($colors) ? implode(', ', $colors) : 'None';
    if (!isset($custname)) $custname = 'None';
    
    header('HTTP/1.1 200 OK');
    header('Content-Type: text/plain');

    echo <<<TXT
Order Details:

Customer Name: $custname

Sizes Ordered: $sizes
Colors Ordered: $colors
TXT;
