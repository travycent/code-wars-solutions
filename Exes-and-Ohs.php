
<?php
/*
Intrustions
 Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.

Examples input/output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false
*/
function XO($s) {
    $x=0;
    $o=0;
    foreach(str_split(strtolower($s)) as $key)
    {
      if($key == "x")
        $x+=1;
      if($key == "o")
        $o+=1;
    }
    if($x === $o){return true;}
    else{return false;}
  
  }
  ?>
