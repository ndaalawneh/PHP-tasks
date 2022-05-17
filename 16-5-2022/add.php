<?php 
include 'connect.php' ; 
if(!empty($_POST['category'])){

$query1="INSERT INTO category (id , name)
VALUES ('' , '".$_POST['category']."')";
$db->exec($query1);

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="category">
        <input type="submit" value="submit">
  

</form>
</body>
</html>