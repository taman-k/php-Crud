<?php
session_start();
include("db.php");
if(isset($_POST['login'])){

$e=$_POST['email'];
$p=md5($_POST['password']);

$sel="SELECT * FROM dtab WHERE email='$e' AND password='$p'";
$rs=$con->query($sel);

if($rs->num_rows>0){
    
    $row=$rs->fetch_assoc();
    $_SESSION['ad_name']=$row['name'];
    header("location:sel.php");
}
else{
    echo "invalid login";
}



}
?>