<?php
include_once "./vendor/autoload.php";
use pondit\b7\Model\Student;
$students = new Student;
$students =$students->getinfo();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student information</title>
</head>
<body>
<a href="./create.php" type ="button" class="btn btn-success">Add</a>
<?php 
    
    if (isset($_SESSION['messege'])) {?>
        <div class="alert alert-success" role="alert">
        <?= $_SESSION['messege'] ?>
       </div>
       <?php 
        unset($_SESSION['messege']);
        ?>
    <?php } ?> 
       
    <pre>
    <table  class="table">
<tr>
    <th>ID</th>
    <th>Name</th>    
    <th>Address</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th>
</tr>
<?php foreach((array)$students as $key=>$value){ ?>
<tr>
<td><?= $value['id']?></td>
<td><?=$value['name']?></td>
<td><?=$value['address']?></td>
<td><?=$value['email']?></td>
<td><?=$value['phone']?></td>
<td><a  href="./show.php?id=<?= $value['id']?>"class="btn btn-primary" >Show</a></td>
<td><a class="btn btn-warning" href="./edit.php?id=<?=$value['id']?>">Edit</a></td> 
<td><a href="./delete.php?id=<?= $value['id']?>"class="btn btn-danger" >Delete</a></td>
</tr>
<?php }?>





</table>
</pre>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

