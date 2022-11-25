<?php
include_once "./vendor/autoload.php";
use pondit\b7\Model\Student;
if (isset($_SERVER['REQUEST_METHOD']) != "GET") {
    echo "method is not found";
    die();
}else{
$id =  $_GET['id'];
$students = new Student;
$studentinfo = $students->show($id);
}
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
    <a class="btn btn-primary" href="./index.php">List</a>
<table class="table">
     <tr>
    <th> ID</th><br>
    <th>Name</th> <br>   
    <th>Address</th><br>
    <th>Email</th><br>
    <th>Phone</th>
    </tr>

    <tr>
    <td><?=$studentinfo['id']?></td>
    <td><?=$studentinfo['name']?></td>
    <td><?=$studentinfo['address']?></td>
    <td><?=$studentinfo['email']?></td>
    <td><?=$studentinfo['phone']?></td>
    </tr>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>