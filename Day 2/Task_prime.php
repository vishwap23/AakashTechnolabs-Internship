<?php 
  // prime or not
  $a = 2;
  $flag=0;
  for($i=2;$i<$a;$i++){
      if($a%$i == 0){
          $flag = 1;
      }
  } 
  if($flag==1){
      echo "<br><br>$a is not a Prime Number";
  }
  else{

      echo "<br><br>$a is  a prime";
  }

   // biggest among 3

   $a=9;   $b=96;  $c=1;
   if($a>$b && $a>$c){
       echo "$a is biggest";
   }
   elseif($b>$a && $b>$c){
       echo "$b is biggest";
   }
   elseif($c>$b && $c>$b){
       echo "$c is biggest";
   }
?>