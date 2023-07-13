<?php 
session_start();
if(!isset($_SESSION['ad_name'])){
    header("location:login.php");
}

?>
<h1>Welcome <?php echo $_SESSION['ad_name'];?></h1>
