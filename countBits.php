<?php
/*
Write a function that takes an integer as input, and returns the number of bits that are equal to one in the binary representation of that number. You can guarantee that input is non-negative.

Example: The binary representation of 1234 is 10011010010, so the function should return 5 in this case
*/
function countBits($n = null) 
{
  $count=0;//The counter for all existing bits
  //check if the submitted value is empty
  if($n == "")
  {
    return $count;//Return the Counter whisch defaults to zero (0) for empty values
  }
  //The submitted value is greater than 0
  else
  {
    $quotient;//declare the quotient-- This the integer value after division
    $remainder;//declare the remainderStore the remainder after the division
    $result="";//declare the result of the transformation
    //Run the while true for as long as the rules are true
    while(true)
    {
      $quotient=(int)$n/2;//the Quotient
      $remainder=$n%2;//Get the remainder
      $result.=$remainder;//Append Remainder to Result

      if($quotient == 0)
      {
        break;//End the loop when the quotient is equal to 0
      }
      else
      {
         $n=$quotient;//continue the loop of quotient is greater than 0
      }
    }
    //Reverse the result
    $result=strrev($result);
    
    for($i=0;$i < strlen($result);$i++)
    {
      //Start counting the ones
      if(intval($result[$i]) === 1)
      {
        $count+=1;

      }
    }
    //Return count
    return $count;
    }

  
}