<?php
// array = 'variable' which can hold more than one value at a time

// $food_1 = "apple";
// $food_2 = "orange";
// $food_3 = "banana";
// $food_4 = "coconut";
// $food_5 = "cherry";

$foods = array("apple", "orange", "banana", "coconut", "cherry");

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";
// echo $foods[3] . "<br>";
// echo $foods[4] . "<br>";


//$foods[0] = 'pineapple';
//array_push($foods, "pineapple", "kiwi");
//array_pop($foods);
//array_shift($foods);
//$foods = array_reverse($foods); //returns new array, have to assign new array to variable
//echo count($foods);

foreach ($foods as $food) {
  echo $food . "<br>";
}
