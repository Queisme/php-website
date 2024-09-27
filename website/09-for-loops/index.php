<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="number">Enter a number to count to: </label><br>
    <input type="text" name="counter" id="counter"> <br>
    <input type="submit" value="Start Counting"><br>
    <label for="numberdown">Enter a number to count down from: </label><br>
    <input type="text" name="counterdown" id="counterdown"> <br>
    <input type="submit" value="Start Counting Down">
  </form>
</body>

</html>
<?php

$counter = $_POST["counter"];
$count_down = $_POST["counterdown"];

for ($i = 1; $i <= $counter; $i++) {
  echo $i . "<br>";
}
for ($i = $count_down; $i >= 0; $i--) {
  echo $i . "<br>";
}


// for loop = repeat some code a certain number of times
/*
for ($i = 10; $i > 0; $i -= 2) {
  echo $i . "<br>";
}
*/


?>