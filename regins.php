<?php

include("db.php");
if(isset($_POST['reg'])){
$n=$_POST['name'];
$e=$_POST['email'];
$p=md5($_POST['password']);

$ins="INSERT INTO dtab SET name='$n', email='$e', password='$p'";
$con->query($ins);

}
?>