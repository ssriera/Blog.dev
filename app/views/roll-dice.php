<html>
<head>
	<title>Dice Roll</title>
</head>
<body>
 	<?php 
 		

		if ($roll == $guess) {
				echo "$guess was the number, good guess!";
			} else {
				echo "Sorry, $guess is not the number!";
		}
 	?>
</body>
</html>