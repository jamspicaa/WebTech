<?php
	session_start();

	if (!isset($_SESSION["namelogin"])) {
		include "name.html";

	} else {
		include "index.html";		
	}