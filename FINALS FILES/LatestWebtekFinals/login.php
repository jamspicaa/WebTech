<?php


	if (isset($_POST['namelogin'])) {
		session_start();

		$_SESSION['namelogin'] = $_POST['namelogin'];

	}

	header('Location: index.php');