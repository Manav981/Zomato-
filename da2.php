<?php
   $n=readline("Enter the size of matrix");
   $mat=array();
   for($i=0;$i<$n;$i++){
       $temp=array();
       for($j=0;$j<$n;$j++){
           $a=readline("Enter element of matrix");
           array_push($temp,$a);
       }
       array_push($mat,$temp);
   }
   echo "The matrix is \n";
  for($i=0;$i<$n;$i++){
      for($j=0;$j<$n;$j++){
          echo $mat[$i][$j]." ";
      }
      echo "\n";
  }
  $ct=0;
  for($i=0;$i<$n;$i++){
      $first=$mat[$i][0];
      $allsame=1;
      for($j=0;$j<$n;$j++){
          if($mat[$i][$j]!=$first){
              $allsame=0;
              break;
          }
      }
      if($allsame==1)
      $ct++;
  }
  if($ct==$n)
  echo "Yes";
  else
  echo "No";
?>