<?php
include "./vendor/autoload.php";
use pondit\b7\Model\Student;
if (isset($_SERVER["REQUEST_METHOD"]) != "POST") {
    echo "allowed";
    die();
}else {
   $id = $_GET['id'];
   $students = new Student;
   $studentinfo = $students->update($_POST, $id);
    header('Location: ./index.php');
    
}

?>