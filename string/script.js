//This creates an interchangeable string
function cats(name, rating){
	return  name + " gets a " + rating + " star rating 'meow!'";
}

console.log(cats("Bagheera", "5"));
console.log(cats("Arlo", "5"));

//This creates the function which displays the return in the command line When i call it.
function areCatsBest(){
	return("Q: Are Cats the best pets? A: Yes, yes they are.");
};

console.log(areCatsBest());

//PHP originals

//This is a loop which displays the text until fuzzy is no longer true
for(let fuzzy = 0; fuzzy < 3; fuzzy++){
	console.log("Cats Rule, Cats Rule, no dogs allowed because they Drool!");
}