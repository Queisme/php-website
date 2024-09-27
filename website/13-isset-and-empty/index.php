<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="login">Login: </label><br>
    <input type="text" name="username" id="username"><br>
    <label for="password">Password: </label><br>
    <input type="password" name="password" id="password"><br>
    <input type="submit" name="login" value="Log In">
  </form>
</body>

</html>
<?php
/*
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if (empty($username)) {
    echo "Username is missing.";
  } elseif (empty($password)) {
    echo "Password is missing.";
  } else {
    echo "Hello {$username}";
  }
}
*/



foreach ($_POST as $key => $value) {
  echo "{$key} = {$value} <br>";
}



// isset() = Returns TRUE if a variable is declared and not null;

// empty() = Returns TRUE if a variable is not declared, false, null, "";

//$username = "QueCode";

//echo isset($username); // 1 ( 1 == TRUE) (FALSE == displays nothing)
/*
if (isset($username)) {
  echo "This variable is set. <br>";
} else {
  echo "This variable is not set. <br>";
}

if (empty($username)) {
  echo "This variable is empty. <br>";
} else {
  echo "This variable is not empty. <br>";
}
*/
?>