<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id=$_GET['eid'];
    $sel="SELECT * FROM dept WHERE id='$id'" ;
    $res=$con->query($sel);
    $row=$res->fetch_assoc();
    ?>
    <form action="upd.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
        <p><b>Name</b></p>
        <p><input type="text" name="name" value="<?php echo $row['name'];?>"/></p>
        
        <p><b>Department</b></p>
        <p>
            <select name="dname">
                <option value="">-Select Department-</option>
                <option <?php if($row['dname']=="water supply"){ echo "selected" ;}?> value="Water Supply">Water Supply</option>
                <option <?php if($row['dname']=="Solid Waste"){ echo "selected"; }?> value="Solid Waste">Solid Waste</option>
                <option <?php if($row['dname']=="Drainage"){ echo "selected"; }?> value="Drainage">Drainage</option>
                <option <?php if($row['dname']=="Health & Hospitals service"){ echo "selected"; }?> value="Health & Hospitals service">Health & Hospitals service</option>
                <option <?php if($row['dname']=="Education"){ echo "selected" ;}?> value="Education">Education</option>
            </select>
        </p>
        <p><b>Complaint Subject</b></p>
        <p><textarea name="desp" rows="7" cols="30">"<?php echo $row['desp'];?>"</textarea></p>
 
        <p>Image</p>
        
        <p><input type="file" name="image"></p>
        <img src="image/<?php echo $row['image']; ?>" style="width : 80px";>

        <p><input type="submit" name="submit" value="submit" class="btn btn-primary">
        </p>
    </form>
</body>
</html>
    </form>
</body>
</html>