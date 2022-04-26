<?php

/* Question Number 1 */

$sum=0 ;
for ($x=1 ; $x<=30 ; $x++){
    $sum = $sum + $x ;
}
echo " <h3> The Total Sum Of These Integer Number is $sum </h3> <br>" ;


/* Question Number 4 */

for ( $i=0 ; $i<5 ; $i++){
    for ( $j=0 ; $j<5 ; $j++){
        if ($i==$j){
            echo $i+1 ;
        }
        else {
            echo 0 ;
        }
    }
    echo "<br>";
}




function factorial($num){
    $sum=$num ;
    for ($i=$num; $i > 1; $i--) { 
    $sum = ($i-1)*$sum ;
    
}
echo $sum ; 
}

factorial(5);

/* Question Number  6 */
function Fibonacci($n){
    
   
 
    if ($n <= 1)
        return $n;
    return Fibonacci($n-1) + Fibonacci($n-2);

} 

function Fibo($nu){
    echo "<pre> <h3> ";
    for($i = 0 ; $i < $nu ; $i++){
     echo ", " .  Fibonacci($i);
    }
    echo " </h3> </pre>";
}

Fibo(10);





      /* Question Number  9 */

      $numm=1 ;
      for ($i=1 ; $i<6 ; $i++){
          for($j=1 ; $j<=$i ; $j++){
              echo $numm ;
              $numm++ ;
              if ($j == $i) {
              
                echo "<br/>";
            }
            
        }
    }
   
