


<?php
/* Question One */
$year = 2024 ;
if ($year % 4 == 0){
    echo "This Year is A leap Year <br>" ;
}
else{
    echo "This year is not a leap year <br> " ; 
}


/* Question Two */
$temp = 16 ; 
if ($temp < 20){
    echo "Winter Is Coming <br>" ; 
}
else {
    echo " It's Summer Time <br>" ;
}

/* Question Three */

$x = 5 ;
$y = 5 ; 
$sum = $x+$y ;

if ($x==$y){
    $sum = $sum*3 ;
    echo "The Sum Is $sum <br>" ;
} 
else{
    echo "The Sum Is $sum <br>" ;
}

/* Question Four */

$a= 10 ;
$b = 20 ;
$summ= $a+ $b ;
if ( $summ==30){
    echo "The Return Value Is $sum <br>" ;
}
else{
    echo "false <br>";
}

/* Question Five */
$z = 20 ;
if ($z%3 == 0){
    echo " The Given positive number is a multiple of 3 <br>" ;
}
else{
    echo "false <br>";
}

/* Question Six */

$w=44 ;
if ($w>= 20 && $w <= 50){
    echo "True <br>";
}
else{
    echo " False <br>" ;
}

/* Question Seven */

function largestNumber($v , $n , $m){
    $max = $v ;
    if ($v>=$n && $v>=$m)
    $max=$v ;
    if ($n>=$v && $n>=$m)
    $max=$n ;
    if ($m>=$n && $m>=$v)
    $max=$m ;
    
    echo " The Largest Nember is $max <br>" ;
}

    largestNumber (250 , 100 , 50) ;


    /* Question Eight */

    $units = 100 ;
    if ($units >0 && $units <=50){
        echo $units*2.50 ;
    
    }
    elseif  ($units >51 && $units <=150){
        echo $units*5  ;
    }
    elseif  ($units >151 && $units <=250){
        echo $units*6.20 ;
    }
    elseif ($units>250){
        echo $units*7.50 ;
    }
   echo "<br>" ;

    


 /* Question nine */


 $age =24 ;
 if ($age >= 18){
     echo " This person is eligible to vote <br>" ;
 }
 else{
     echo "This  person is  not eligible to vote <br>" ;
 }

  /* Question ten */

  function check($num){
      if($num >0){
          $warning = "This Is A Positive Number" ;
      }

      elseif ($num ==0){
        $warning = "It's Zero" ;
      }
      else {
        $warning = "This is a Negative Number" ;
      }

      echo $warning ;
  }
 check(30);
 echo "<br>" ;


 /* Qustion eleven */

function calc ($num1 , $num2 , $op){
    $res=0 ;
    switch ($op){
        case "+" :{
           $res = $num1 + $num2 ;
           break;
        }
           case "-" :{
               $res = $num1 - $num2 ;
               break;
           }
               case "*" :{
                   $res = $num1 * $num2 ;
                   break;
               }
                   case "/" :{
                       $res = $num1 / $num2 ;
                       break;
                   }
                       default :{
                       echo "Good Luck" ;
                       break ;
                       }

    }
   echo $res ;
}

 calc(10 , 20 , '*') ;
 ECHO "<BR>";


 /*Question Twelve */

 $grade = 51 ;
 
 switch((int)( $grade/10 ) ){
     case 0:
     case 1:
     case 2:
     case 3:
     case 4:
     case 5:
     case 6:{
        echo "F";
        break;
    }
     case 7:{
        echo "D";
        break;
    }
     case 8:{
        echo "C";
        break;
    }
     case 9:{
        echo "B";
        break;
    }
     case 10:{
        echo "A";
        break;
    } 
default:{
    echo "undfined value ";
    break;
}
}


 