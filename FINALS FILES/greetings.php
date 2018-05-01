<!DOCTYPE>
<html>
<body>
    
<?php
date_default_timezone_set('Asia/Manila');

$Hour = date('G');

if ( $Hour >= 5 && $Hour <= 11 ) {
    echo "Good Morning". "<br>";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo "Good Afternoon". "<br>";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo "Good Evening". "<br>";
}
echo date("l jS \of F Y h:i:s A") . "<br>";
?>
    
    </body>
</html>
