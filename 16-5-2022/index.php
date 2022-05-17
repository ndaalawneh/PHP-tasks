<?php 
require 'connect.php' ;

$qs = "
 SELECT * FROM category 
 ";
 $data = $db->query($qs); 

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
    <pre>

    

    <label>Categories</label>
    <select name="category">
        <?php foreach($data as $val){ ?>
        <option value= "<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
        <?php } ?>

        </select>
        
        <button type="submit" name="submit">Submit</button>
    </pre>

        </form>

</body>
</html>     



