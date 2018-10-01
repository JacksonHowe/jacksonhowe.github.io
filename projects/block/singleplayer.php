<?php
	$level = $_GET["level"];
	$link = $_GET["level"];
	if ($level < 1 || $level > 6) {
		header("Location: index.php?message=That%20level%20is%20not%20valid.");
	} else {
		$levels = [0, 2000, 1200, 700, 200, 100, 60];
		$level = $levels[$level];
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Block (Tap Race) - Single Player</title>

		<meta name="author" content="Jackson Howe">
		<meta name="description" content="Tap Race">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

		<script src="jquery.js"></script>
		<script type='application/javascript' src='fastclick.js'></script>

		<link href="game.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="background" id="background" style="cursor: auto;"></div>
		<div class='block' id='block' style='width: 50%;'></div>

		<div class="links">
			<a href="index.php">Home</a>
			<a id="blinker" href="#">You are blue. Tap faster than red to win! Tap when ready...</a>
		</div>

		<script type="text/javascript">
			$(document).ready(function() {
				FastClick.attach(document.body);

				var blinker = setInterval(function() {
					$("#blinker").fadeOut(500).fadeIn(500);
				}, 2800);

				function victorCheck() {
					if ($('#block').width() / $('#block').parent().width() * 100 >= 100) {
						$("block").clearQueue();
						<?php echo "window.location.href = 'index.php?link=singleplayer.php%3Flevel%3D$link&message=Congratulations!%20You%20won.';"; ?>
					} else if ($('#block').width() / $('#block').parent().width() * 100 <= 0) {
						clearInterval(ai);
						<?php echo "window.location.href = 'index.php?link=singleplayer.php%3Flevel%3D$link&message=You%20failed.';"; ?>
					}
				}

				var intervalValid = true;
				$("#block").click(function() {
					clearInterval(blinker);
					$('#block').animate({width: '+=1%'}, 100);
					victorCheck();
					if (intervalValid) {
						intervalValid = false;
						ai = setInterval(function() {
							$('#block').animate({width: '-=1%'}, 100);
							victorCheck();
						}, <?php echo $level; ?>);
					}
				});
			});
		</script>
	</body>
</html>