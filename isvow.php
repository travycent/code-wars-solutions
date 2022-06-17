<?php
/*
Given an array of numbers, check if any of the numbers are the character codes for lower case vowels (a, e, i, o, u).

// If they are, change the array value to a string of that vowel.

 Return the resulting array.
 */
function isVow(array $a)
{
  //Array of Vowels to be Checked against
  $array_vowels=["a","e","i","o","u"];
  //Loop through Submitted Array
  for($i=0;$i < count($a); $i++)
    {
      //Check if ASCII code for submitted array exists in the vowels array
      if(in_array(chr($a[$i]),$array_vowels))
      {
        //Replace the array value with the ASCII Character
        $a[$i]=chr($a[$i]);
        
      }
    
    } 
    //Return Array
    return $a;
}