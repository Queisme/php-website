<?php

//switch = replacement to using many elseif statements
//         more efficient, less code to write

/*
$grade = "A";

if ($grade === "A") {
  echo "You did great!";
} elseif ($grade === "B") {
  echo "You did good!";
} elseif ($grade === "C") {
  echo "You did okay.";
} elseif ($grade === "D") {
  echo "You did poorly.";
} elseif ($grade === "F") {
  echo "You failed.";
} else {
  echo "{$grade} is not a valid grade.";
}
*/
/*
$grade = "A";

switch ($grade) {
  case "A":
    echo "You made an A!";
    break;
  case "B":
    echo "You made a B!";
    break;
  case "C":
    echo "You made a C!";
    break;
  case "D":
    echo "You made a D!";
    break;
  case "F":
    echo "You made a F!";
    break;
  default:
    echo "{$grade} is not a valid grade.";
}
*/
/*
$date = date("l");

switch ($date) {
  case "Monday":
    echo "Today is Monday.";
    break;
  case "Tuesday":
    echo "Today is Tuesday.";
    break;
  case "Wednesday":
    echo "Today is Wednesday.";
    break;
  case "Thursday":
    echo "Today is Thursday.";
    break;
  case "Friday":
    echo "Today is Friday.";
    break;
  case "Saturday":
    echo "Today is Saturday.";
    break;
  case "Sunday":
    echo "Today is Sunday.";
    break;
  default:
    echo "{$date} is not a valid date.";
}
*/