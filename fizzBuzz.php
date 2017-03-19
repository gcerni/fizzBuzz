<!DOCTYPE html>
<html>
<head>
	<title>FizzBuzz.php</title>
</head>
<body>
	<ul>
		<?php
			for ($i = 1; $i <= 100; $i++) {
				if ($i % 3 == 0 && $i %5 ==0) {
					echo "<li> {$i} Fizz Buzz</li>";
				}
				else if ($i % 5 == 0 ) {
					echo "<li>" . $i . " Buzz</li>";
				}
				else if ($i %3 == 0) {
					echo "<li>" . $i . " Fizz</li>";
				}
			}
		?>
	</ul>
</body>
</html>
