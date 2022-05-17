<?php 

include "connect.php" ;



$name = $_GET['name'];
$color = $_GET['color'];
$type = $_GET['type'];
$price = $_GET['price'];
$age = $_GET['age'];

  



    
$query = "INSERT INTO animal ( animal_name , animal_color , animal_type , animal_price , animal_age)
VALUES('$name' , '$color' , '$type' , '$price' , '$age' )" ;

if(mysqli_query($connect , $query)){

   echo "we have a new record" ; 
}
else{
    echo 'error:  '. mysqli_errno($connect);
}


$query2= "UPDATE `animal` SET `animal_name` = 'snake' WHERE `animal`.`animal_id` = 3";

if(mysqli_query($connect,$query2)){
   echo "the record has been updated" ;
}
else{
    echo 'error:  '. mysqli_errno($connect);
}


$query3="DELETE FROM `animal` WHERE `animal`.`animal_id` = 5" ;
if(mysqli_query($connect,$query3)){
    echo "the record has been deleted" ; 
}
else{
    echo 'error:  '. mysqli_errno($connect);
}

?>
























