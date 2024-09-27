<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!--
  <form action="index.php" method="post">
    <label for="x">x:</label>
    <input type="text" name="x" id="x"><br>
    <label for="y">y:</label>
    <input type="text" name="y" id="y"><br>
    <label for="z">z:</label>
    <input type="text" name="z" id="z"><br>
    <input type="submit" value="Total">
  </form>
-->
  <form action="index.php" method="post">
    <label for="radius">Radius: </label>
    <input type="text" name="radius" id="radius">
    <input type="submit" value="Submit">
  </form>
</body>

</html>
<?php
$radius = $_POST["radius"];
$diameter = $radius * 2;
$circumference = round(2 * pi() * $radius, 2);
$area = round(pi() * pow($radius, 2), 2);
$volume = round(4 / 3 * pi() * pow($radius, 3), 2);

echo "The radius of your circle is: {$radius}cm <br>";
echo "The diameter of your circle is: {$diameter}cm <br>";
echo "The circumference of your circle is: {$circumference}cm <br>";
echo "The area of your circle is: {$area}cm^2 <br>";
echo "The volume of your sphere is: {$volume}cm^3 <br>";





/*
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

$total = abs($x); //absolute value
$total = round($x);
$total = floor($x); //round down
$total = ceil($x); //round up
$total = sqrt($x);
$total = pow($x, $y);
$total = max($x, $y, $z);
$total = min($x, $y, $z);
$total = pi();
$total = rand(10, 45); //random number, add numbers for min and max

echo $total;
*/
?>