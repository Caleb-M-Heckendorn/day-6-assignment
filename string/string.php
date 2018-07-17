<!DOCTYPE htmL>
<html>
	<body>
<?php
/**
 * Created by PhpStorm.
 * User: Caleb M. Hackendorn
 * Date: 7/16/2018
 * Time: 2:01 PM
 */
//This creates the function which displays the "echo" When i call it.
function areCatsBest(){
	echo "Q: Are Cats the best pets? A: Yes, yes they are. ";
	echo "<br>";
};
areCatsBest();

//This is a loop which displays the text until fuzzy is no longer true
for($fuzzy=0; $fuzzy < 3; $fuzzy++){
	echo "Cats Rule, Cats Rule, no dogs allowed because they Drool! ";
	echo "<br>";
}

//This creates an interchangeable string
function cats($name, $rating){
	return ($name . " gets a " . $rating . " star rating 'meow!'");
}
		echo"<br>";
		echo(cats("Bagheera", "5"));
		echo"<br>";
		echo(cats("Arlo", "5"));
?>
	</body>
</html>
