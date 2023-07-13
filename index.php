<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="ins.php" method="post" enctype="multipart/form-data">
        <h1>Complaint Registration Form</h1>
       
        <p><b>Name</b></p>
        <p><input type="text" name="name" placeholder="Enter Your Name"/></p>



    <p><b>Department</b></p>
    <p>
    <select name="dname">
        <option value="">--Select Department--</option>
        <option value="water supply">Water Supply</option>
        <option value="Solid Waste">Solid Waste</option>
        <option value="Drainage">Drainage</option>
        <option value="Health">Health & Hospitals service</option>
        <option value="Education">Education</option>
</select>
</p>
    <p><b>Complaint Subject</b></p>
    <p><textarea name="desp" rows="7" cols="30"></textarea></p>



    
    <p><input type="file" name="image"/></p>

    <p><input type="submit" name="submit" value="Submit" class="btn btn-primary"></p>
   




    </form>
</body>
</html>