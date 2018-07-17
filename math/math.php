<!DOCTYPE htmL>
<html>
	<body>
		<?php
			function calcRectSqFt($width, $length){
				$result = $width * $length;
				return $result;
			}
			echo "23 x 3 = " . calcRectSqFt(23, 3) . "<br>";

			function cashAmountAfter($cash, $cost){
				$result = $cash - $cost;
				return $result;
			}
			echo "I will have " . cashAmountAfter(40, 21) . " Dollars after I buy this (Is it worth it?)"
		?>
		<a href="./index.html" alt="Just a link back to the 'home' page">Back</a>
	</body>
</html>