<?php 


$hostName = 'localhost';
$userNmae = 'root' ;
$userPass = '' ;
$dbName = 'animal';


 $connect = mysqli_connect($hostName , $userNmae , $userPass , $dbName) ;

 if ($connect===false){
     echo "connection failed".mysqli_connect_error() ;
 }

 else{
     echo "connected successfully" ;
 }


?>