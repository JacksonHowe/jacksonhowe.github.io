<?php
	$file = $_GET["game"];
	if (!file_exists("games/$file.txt")) {
		header("Location: index.php?message=That%20game%20does%20not%20exist.");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Block (Tap Race)</title>

		<meta name="author" content="Jackson Howe">
		<meta name="description" content="Tap Race">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

		<script src="jquery.js"></script>
		<script type='application/javascript' src='fastclick.js'></script>

		<link href="game.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="background" id="background"></div>
		<?php
			$block = (int) file_get_contents("games/$file.txt");
			echo "<div class='block' id='block' style='width: $block%;'></div>";
		?>

		<div class="links">
			<a href="index.php">Home</a>
			<a href="newGame.php">New Game</a>
			<?php echo "<a id='errorbox' href='#'>Share code: $file</a>"; ?>
		</div>

		<script type="text/javascript">
			$(document).ready(function() {
				FastClick.attach(document.body);
				var counter = 0;

				$("#block").click(function() {
					counter++;
				});

				$("#background").click(function() {
					counter--;
				});

				setInterval(function() {
					if (counter > 0) {
						<?php echo "$.post('ajaxW.php', {game: '$file', modify: 'add', amount: counter}).done(function(data) { console.log(data); }).fail(function(error) { $('#errorbox').html('Your internet connection appears to be offline. Check your connection.'); console.log(error); });"; ?>
						counter = 0;
					} else if (counter < 0) {
						<?php echo "$.post('ajaxW.php', {game: '$file', modify: 'sub', amount: counter}).done(function(data) { console.log(data); }).fail(function(error) { $('#errorbox').html('Your internet connection appears to be offline. Check your connection.'); console.log(error); });"; ?>
						counter = 0;
					}

					<?php
						echo "$.get('ajaxR.php?game=$file').done(function(data) {
							$('#errorbox').html('Share code: $file');
							var width = data + '%';
							$('#block').animate({width: width}, 150);
							if (data >= 100) {
								$.post('ajaxW.php', {game: '$file', modify: 'set', amount: '50'}).done(function(data) { console.log(data); });
								window.location.href = 'index.php?link=game.php%3Fgame%3D$file&message=Blue%20won!';
							} else if (data <= 0) {
								$.post('ajaxW.php', {game: '$file', modify: 'set', amount: '50'}).done(function(data) { console.log(data); });
								$.post('ajaxW.php', {game: '$file', modify: 'set', amount: '50'}).done(function(data) { console.log(data); });
								window.location.href = 'index.php?link=game.php%3Fgame%3D$file&message=Red%20won!';
							}
							console.log('Read: ' + data);
						}).fail(function(error) { $('#errorbox').html('Your internet connection appears to be offline. Check your connection.'); console.log(error); });";
					?>
				}, 200);
			});
		</script>
	</body>
</html>