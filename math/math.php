<!DOCTYPE htmL>
<html>
	<body>
		<?php
			function rectArea($width, $length){
				$result = $width * $length;
				return $result;
			}
			echo "23 x 3 = " . rectArea(23, 3)."";

			function cashAmountAfter($cash, $cost){
				$result = $cash - $cost;
				return $result;
			}
			echo "I will have " . cashAmountAfter(40, 21) . " Dollars after I buy this (Is it worth it?)"
		?>
	</body>
</html>