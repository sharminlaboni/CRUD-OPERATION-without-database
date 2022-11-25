<?php

include "./vendor/autoload.php";
use pondit\b7\Model\Student;
if (isset($_SERVER["REQUEST_METHOD"]) != " GET") {
    echo " allowed";
    die();
}else {
    $id =  $_GET['id'];


    $students = new Student;
    $students->delete($id);
    header('Location:./index.php');

}

?>