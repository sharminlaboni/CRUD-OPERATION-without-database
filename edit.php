<?php

$id =  $_GET['id'];

include "./vendor/autoload.php";
use pondit\b7\Model\Student;

   $students = new Student;
   $studentinfo = $students->show($id);

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
    <form action="./update.php?id=<?= $studentinfo['id']?>"  method="POST">

        <h1>Edit studentInformation</h1>
        <div class="mb-3">
        <label for="id" class="form-label">ID:</label>
        <input type="text" id="id" value="<?= $studentinfo['id']?>"  class="form-control" name="id">
       </div>
        <div class="mb-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text"class="form-control" value="<?= $studentinfo['name']?>"  name="name" id="name">
         </div>
        <div class="mb-3">
        <label for="address"class="form-label" >Address:</label>
        <input type="text" class="form-control"value="<?= $studentinfo['address']?>" name="address" id="address">
        </div>
        <div class="mb-3">
        <label for="email"class="form-label" >Email :</label>
        <input type="email"class="form-control"value="<?= $studentinfo['email']?>" name="email" id="email">
        </div>
        <div class="mb-3">
        <label for="phone"class="form-label" >phone : </label>
        <input type="number"class="form-control" value="<?= $studentinfo['phone']?>" name="phone" id="phone">
        </div>
        <button type="submit" class="btn btn-primary">update</button>
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>