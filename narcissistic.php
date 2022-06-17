<?php
/*
A Narcissistic Number is a positive number which is the sum of its own digits, each raised to the power of the number of digits in a given base. In this Kata, we will restrict ourselves to decimal (base 10).

For example, take 153 (3 digits), which is narcisstic:

    1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153
and 1652 (4 digits), which isn't:

    1^4 + 6^4 + 5^4 + 2^4 = 1 + 1296 + 625 + 16 = 1938
The Challenge:

Your code must return true or false (not 'true' and 'false') depending upon whether the given number is a Narcissistic number in base 10. This may be True and False in your language, e.g. PHP.

Error checking for text strings or other invalid inputs is not required, only valid positive non-zero integers will be passed into the function.
*/
function narcissistic(int $value): bool {
    //Split the value into an Array
    $array=array_map('intval',str_split($value));
    //Declare a Result to store the response..Start Up om 0
    $result=0;
    //Get the Length of the Array of Numbers
    $length=count($array);
    //Loop through the Array
    foreach($array as $key)
    {
      //Get the result of the each digit with the power of the length
      $val_power=pow($key,$length);
      //Append the result to the final result
      $result+=$val_power;
    }
    //check the Result and Return True or False
    if($result === $value)
      return true;
    else
      return false;
    
  }