<?php
include_once "./vendor/autoload.php";
if($_SERVER['REQUEST_METHOD']!="POST")
{
    echo"allowed";
    die();
}
use pondit\b7\Model\Student;
$students = new Student;
$students->storedata($_POST);
header('Location: ./index.php');

?>