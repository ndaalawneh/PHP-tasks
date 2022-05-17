<?php  

try{
$db = new PDO('mysql:host=localhost;dbname=category' , 'root' , '');
}
catch(PDOException $e){
    echo "Try Again" ;
}


?>