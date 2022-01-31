<?php
//echo 'hello';
//echo '<pre>';
//print_r($_POST);
//echo $_POST['first_name'];
//echo $_POST['last_name'];
//echo $_POST['full_name'];
//echo $_POST['btn'];

require_once  'vendor/autoload.php';
use App\classes\FullName;

$fullName=new FullName($_POST);
//$fullName->index();
$result= $fullName->index();
include 'index.php';
