<!DOCTYPE htmL>
<html>
	<body>
		<?php
		/**
		 * Created by PhpStorm.
		 * User: Caleb M. Heckendorn
		 * Date: 7/16/2018
		 * Time: 2:27 PM
		 */
			$pokemon = array('Absol', 'Pikachu', 'Lucario');
				echo "My favorite Pokemon are " . $pokemon[0] . " , " . $pokemon[1] . " and " . $pokemon[2];
				echo "<br>";
				?>
			<h3>These are my favorite all time Wii games</h3>
		<?php
			$superMarioGames = array('MarioKart Wii', 'New Super Mario Bros. Wii', 'Super Smash Bros. Brawl');
				$arrLength = count($superMarioGames);
			for($x = 0; $x < $arrLength; $x ++){
				echo $superMarioGames[$x];
				echo "<br>";
			}
		?>
	</body>
</html>
