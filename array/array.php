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
		//this function outputs an array of my favorite pokemon
		function favPokemon(){
			$pokemon = array('Absol', 'Pikachu', 'Lucario');
				echo "My favorite Pokemon are " . $pokemon[0] . " , " . $pokemon[1] . " and " . $pokemon[2];
				echo "<br>";
			};
		favPokemon();
		?>
			<h3>These are my favorite all time Wii games</h3>
		<?php
		//this function outputs an array of my favorite Mario games
		function favMario() {
			$superMarioGames = array('MarioKart Wii', 'New Super Mario Bros. Wii', 'Super Smash Bros. Brawl');
			$arrLength = count($superMarioGames);
			for($x = 0; $x < $arrLength; $x++) {
				echo $superMarioGames[$x];
				echo "<br>";
			}
		};
		favMario();
		?>
	</body>
</html>
