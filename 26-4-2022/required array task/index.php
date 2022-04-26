<?php

/* Question Number 1 */

$colors = array('white', 'green', 'red') ;


sort ($colors);
echo "<ul>" ;
foreach($colors as $b){
    echo "<li>$b</li>" ;
}
echo "</ul>" ;

/* Question Number 2 */

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki", "France" => "Paris",
  "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
  "Germany" => "Berlin", "Greece" => "Athens",
   "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 


    foreach ($cities as $country=>$capital){
        echo "The capital of $country is $capital <br>" ;
    }


    

    $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
    echo reset ($color) ;
    echo "<br>";


/* Question Number 4 */
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $a=>$b){
    echo "$a=>$b <br>" ;
}

/* Question Number 8 */

$words =  array("abcd","abc","de","hjjj","g","wer") ;

$min = strlen($words[0]);
$max = strlen($words[0]);

for ($i=0; $i <count($words) ; $i++) { 
    if ($max<strlen($words[$i])){
     $max=strlen($words[$i]) ;
    }
    if ($min>strlen($words[$i])){
     $min=strlen($words[$i]) ;
    }
    
    
}
echo "<h3> The longest element in array is $max and the shortest element in array is $min" ;




