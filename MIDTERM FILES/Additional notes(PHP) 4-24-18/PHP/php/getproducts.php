<?php
    include("includes/db.php");

    $category = $_GET["cat"];
    $view = $_GET["view"];

    $query = "SELECT prodid, description, price, image
              FROM products
              WHERE category = ?
              ORDER BY description";

    $stmt = $db->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $stmt->bind_result($prodid, $description, $price, $image);

    // $stmt = mysqli_stmt_init($db);
    // mysqli_stmt_prepare($stmt, $query);
    // mysqli_stmt_bind_param($stmt, "s", $category);
    // mysqli_stmt_execute($stmt);
    // mysqli_stmt_bind_result($stmt, $prodid, $description, $price, $image);

    include("includes/product.php");
    
    $products = [];

    while ($stmt->fetch()) {
    // while (mysqli_stmt_fetch($stmt)) {
        $product = new Product($prodid, $category, $description, $price, $image);
        $products[] = $product;
    }

    $stmt->close();
    // mysqli_stmt_close($stmt);

    switch ($view) {
        case "html":
            include("pagefragments/showhtml.php");
            break;
        
        case "json":
            include("pagefragments/showjson.php");
            break;

        default:
            header("Location: error400.html");
            break;
    }
