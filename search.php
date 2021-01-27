<?php
session_start();
		echo $_SESSION["mobile"] 	= $_POST["mobile"];
		header("location:my-order.php");

		exit;
		?>
