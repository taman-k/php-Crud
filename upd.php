<?php
include("db.php");

if(isset($_POST['submit'])){
    $n=$_POST['name'];
    $dp=$_POST['dname'];
    $d=$_POST['desp'];
    $id=$_POST['id'];


if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=""){
        
    $buffer=$_FILES['image']['tmp_name'];
    $p=time().$_FILES['image']['name'];
    move_uploaded_file($buffer,"image/".$p);

    $up="UPDATE dept SET  name='$n',dname='$dp', desp='$d',image='$p' WHERE id='$id'";
}
else{
    $up="UPDATE dept SET name='$n', dname='$dp', desp='$d' WHERE id='$id'";

}

$con->query($up);

header("location:sel.php");
echo "Data Submitted Successfully ";
}
else{
    echo "Access Denied";
}
?>