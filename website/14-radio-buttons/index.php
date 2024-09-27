<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <input type="radio" value="Visa" name="credit_card" id="visa">Visa<br>
    <input type="radio" value="MasterCard" name="credit_card" id="mastercard">MasterCard<br>
    <input type="radio" value="American Express" name="credit_card" id="americanexpress">American Express<br>
    <input type="submit" name="confirm" value="Confirm">

  </form>

</body>

</html>

<?php
if (isset($_POST["confirm"])) {

  $credit_card = null;

  if (isset($_POST["credit_card"])) {
    $credit_card = $_POST["credit_card"];
  }

  switch ($credit_card) {
    case "Visa":
      echo "You selected Visa.";
      break;
    case "MasterCard":
      echo "You selected MasterCard.";
      break;
    case "American Express";
      echo "You selected American Express.";
      break;
    default:
      echo "Please make a selection.";
  }





  /*
  if ($credit_card === "Visa") {
    echo "You selected Visa.";
  } elseif ($credit_card === "MasterCard") {
    echo "You selected MasterCard.";
  } elseif ($credit_card === "American Express") {
    echo "You selected American Express.";
  } else {
    echo "Please make a selection.";
  }
*/
}

?>