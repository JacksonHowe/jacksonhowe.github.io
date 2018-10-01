<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$game = $_POST["game"];
		$modify = $_POST["modify"];
		$amount = $_POST["amount"];

		if ($amount >= -50 && $amount <= 50) {
			if (file_exists("games/$game.txt")) {
				if ($modify == "add") {
					file_put_contents("games/$game.txt", file_get_contents("games/$game.txt") + $amount);
					echo "Written: +$amount";
				} else if ($modify == "sub") {
					file_put_contents("games/$game.txt", file_get_contents("games/$game.txt") + $amount);
					echo "Written: $amount";
				} else if ($modify == "set") {
					file_put_contents("games/$game.txt", $amount);
					echo "Written: $amount";
				} else { // modify bad
					echo "Error: Bad value for modify.";
				}
			} else { // file does not exist
				echo "Error: Bad value for game.";
			}
		} else { // amount bad
			echo "Error: Bad value for amount.";
		}
	} else {
		echo "Error: Page requires a POST.";
	}
?>