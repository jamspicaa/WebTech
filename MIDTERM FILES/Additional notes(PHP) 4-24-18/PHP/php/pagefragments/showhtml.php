<?php
	header("HTTP/1.1 200 OK");
	header("Content-Type: text/html");
	
	include("header.html");

	echo "<h1>Product List</h1>";
	echo "<h2>Category: $category</h2>";

	if (count($products) == 0) {
		echo "<h2>No available products.</h2>";

	} else {
		echo "<table><thead><tr><th>Product ID</th><th>Description</th><th>Price</th><th>Image</th></tr></thead><tbody>";

		foreach ($products as $product) {
			$prodid = $product->get_prodid();
			$description = $product->get_description();
			$price = $product->get_price();
			$image = $product->get_image();

			echo "<tr><td>$prodid</td><td>$description</td><td>$price</td><td><img alt='$description' src='$image'></td></tr>";
		}

		echo "</tbody></table>";
	}

	include("footer.html");
