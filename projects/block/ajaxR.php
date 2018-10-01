<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$game = $_GET["game"];

		if (file_exists("games/$game.txt")) {
			echo file_get_contents("games/$game.txt");
		} else { // file does not exist
			echo "Error: Bad value for game.";
		}
	} else {
		echo "Error: Page requires a GET.";
	}
?>