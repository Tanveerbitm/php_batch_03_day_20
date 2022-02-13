<?php


require_once "vendor/autoload.php";
use App\classes\Student;
use App\classes\User;

$user  = new User();
$student = new Student();
$student->manage();
echo "<br/>";
echo User::$area;

