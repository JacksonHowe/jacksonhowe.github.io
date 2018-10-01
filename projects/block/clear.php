<?php
	setcookie("savedgames", "", time());
	header("Location: index.php?message=Saved%20games%20cleared.");
?>