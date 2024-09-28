<?php

//function = write some code once, reuse when you need it
//           type () after function name to invoke
//           ex. add(), subtract(), multiply(), divide()

/*
function happy_birthday($person)
{
  echo "Happy Birthday to you! <br>";
  echo "Happy Birthday to you! <br>";
  echo "Happy Birthday Dear {$person}! <br>";
  echo "Happy Birthday to you! <br>";
}
happy_birthday("Que");
*/
/*
function evenOdd($number)
{
  if ($number % 2 === 0) {
    echo "Even.";
  } else {
    echo "Odd.";
  }
}

evenOdd(56);
*/

function hypotenuse($a, $b)
{
  $c = sqrt($a ** 2 + $b ** 2);
  return $c;
}

echo hypotenuse(4, 5);
