<?php
// variable = reuseable container that holds data
//            string, integer, float, boolean 
$name = "Que Code";
$food = "pizza";
$email = "que@gmail.com";

$age = 30;
$users = 2;
$quantity = 3;

$gpa = 3.8;
$price = 11.10;
$tax_rate = 5.1;

$employed = true;
$has_kids = false;
$for_sale = true;

$total = null;

echo $name . "<br>";
echo "Hello {$name} <br>";
echo "I like {$food}! <br>";
echo "My email is: {$email} <br>";
echo "I am not {$age} years old. <br>";
echo "There are {$users} users currently online. <br>";
echo "You would like to buy {$quantity} pizzas! <br>";
echo "My gpa is {$gpa}. Not too shabby. <br>";
echo "My pizza is \${$price}. <br>";
echo "The sales tax is {$tax_rate}%. <br>";

echo "<br>";
echo "Employed? {$employed} <br>";
echo "Has kids? {$has_kids} <br>";
echo "For sale? {$for_sale} <br>";
echo "If the boolean is false, nothing is displayed. If the boolean is true, 1 is displayed. <br>";
echo "<br>";

echo "You have ordered {$quantity} x {$food}(s) <br>";
$total = $quantity * $price;
echo "Your total is: \${$total}";
