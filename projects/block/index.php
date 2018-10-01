<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Block (Tap Race)</title>

		<meta name="author" content="Jackson Howe">
		<meta name="description" content="Tap Race">

		<script src="jquery.js"></script>
		<link href="main.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="highlight">

			<h1>Block</h1>
			<p>Welcome to block! Click a game below or start your own...</p>
			<?php
				if (!empty($_GET['message'])) {
					$message = $_GET['message'];
					if (!empty($_GET['link'])) {
						$link = $_GET['link'];
						echo "<p class='alert'>$message <a href=$link>Try again?</a></p>";
					} else {
						echo "<p class='alert'>$message</p>";
					}
					echo "<script>
						setTimeout(function() {
							$('.alert').fadeOut();
						}, 8000);
					</script>";
				}
			?>
			<p>Create Your Own: <a class="new" href="newGame.php">New Private Game</a></p>
			<form action="openGame.php" method="GET">
				Open Game: <input type="text" name="game" size="6" placeholder="123456">
				<input type="submit" value="Go">
			</form>
			<p>Single Player Games: <a href="singleplayer.php?level=1">Level 1</a><a href="singleplayer.php?level=2">Level 2</a><a href="singleplayer.php?level=3">Level 3</a><a href="singleplayer.php?level=4">Level 4</a><a href="singleplayer.php?level=5">Level 5</a><a href="singleplayer.php?level=6">Level 6</a></p>
			<p>Multiplayer Games: <a href="game.php?game=global">Global</a><a href="game.php?game=us">United States</a><a href="game.php?game=europe">Europe</a></p>
			<p>Public Games: <a href="game.php?game=gamea">Game A</a><a href="game.php?game=gameb">Game B</a><a href="game.php?game=gamec">Game C</a><a href="game.php?game=gamed">Game D</a><a href="game.php?game=gamez">Game Z</a></p>
			<p><?php
				$saved = json_decode($_COOKIE["savedgames"]);
				if (isset($saved)) {
					echo "My Games: ";
					foreach ($saved as $save) {
						echo "<a href='game.php?game=$save'>$save</a>";
					}
					echo "<a class='new' href='clear.php'>Clear</a>";
				}
			?></p>
		</div>
	</body>
</html>