<?php
	file_put_contents("security.txt", file_get_contents("security.txt") + 1);
	if (file_get_contents("security.txt") < 80) {
		$newGame = rand(100000, 999999);
		if (!file_exists("games/$newGame.txt")) {
			file_put_contents("games/$newGame.txt", '50');
			$saved = json_decode($_COOKIE["savedgames"]);
			if (!isset($saved)) {
				$saved = [];
			}

			if (count($saved) >= 5) {
				array_shift($saved);
				array_push($saved, (string) $newGame);
				setcookie("savedgames", json_encode($saved), time()+200000);
			} else {
				array_push($saved, (string) $newGame);
				setcookie("savedgames", json_encode($saved), time()+200000);
			}
			header("Location: game.php?game=$newGame");
		} else {
			header("Location: index.php?message=Error.%20Try%20again.");
		}
	} else {
		header("Location: index.php?message=Security%20lockout:%20too%20many%20games%20exist.");
		mail ("jackson@jacksonhowe.com", "Block: Too many games lockout", "A security lockout has been established on block. Edit the security.txt file (0) to unlock.");
	}
?>