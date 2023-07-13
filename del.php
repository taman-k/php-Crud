<?php
include("db.php");
$id=$_GET['did'];
$sel="SELECT * FROM dept WHERE id='$id'";
$res=$con->query($sel);
$row=$res->fetch_assoc();

unlink("image/".$row['id']);

$del="DELETE FROM dept WHERE id='$id'";
$con->query($del);
header("location:sel.php");

?>
