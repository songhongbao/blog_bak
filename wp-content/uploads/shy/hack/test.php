<?php
function permute($str,$i,$n)
{
   if ($i == $n)
       print "$str\n";
   else
   {
        for ($j = $i; $j < $n; $j++) {
          swap($str,$i,$j);
          permute($str, $i+1, $n);
          swap($str,$i,$j); // backtrack.
       }
   }
}

function swap(&$str,$i,$j) 
{
    $temp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $temp;
}
//这个最好用递归
$str = "abcd";
permute($str, 0, strlen($str));
