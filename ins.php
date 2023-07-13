<?php

include("db.php");
if(isset($_POST['submit'])){
$n=$_POST['name'];
$dp=$_POST['dname'];
$d=$_POST['desp'];


$buffer=$_FILES['image']['tmp_name'];
$p=time().$_FILES['image']['name'];
move_uploaded_file($buffer,"image/".$p); 

$ins="INSERT INTO dept SET name='$n',dname='$dp', desp='$d',image='$p'";
$con->query($ins);
echo "<center><h2>Your Complaint is Registered Successfully.</h2></center>";
}
else{
    echo "Access Denied";
}
?>