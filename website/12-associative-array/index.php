<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="country">Enter a Country: </label>
    <input type="text" name="country" id="country">
    <input type="submit" value="Submit">
  </form>
</body>

</html>
<?php
// associative array = an array made of key => value pairs

// countries => capitals
// id => username
// item => price

$capitals = array(
  "USA" => "Washington D.C.",
  "Japan" => "Kyoto",
  "South Korea" => "Seoul",
  "India" => "New Delhi"
);

$capital = $capitals[$_POST["country"]];
echo "The capital is: {$capital}";


//$capitals["USA"] = "Las Vegas"; //change
//$capitals["China"] = "Beijing"; //add
//array_pop($capitals);
//array_shift($capitals);
//$keys = array_keys($capitals);
//$values = array_values($capitals);
//$capitals = array_flip($capitals);
//$capitals = array_reverse($capitals);
//echo count($capitals);


//echo $capitals["USA"] . "<br>";
//echo $capitals["Japan"] . "<br>";

//foreach ($capitals as $key => $value) {
//  echo "{$key} = {$value} <br>";
//}
?>