<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Complaint Details</h1>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>Description</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $sel="SELECT * FROM dept";
    $res=$con->query($sel);
    while($row=$res->fetch_assoc()){
      ?>
      <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['dname']; ?></td>
        <td><?php echo $row['desp']; ?></td>
        
        <td><img src="image/<?php echo $row['image']; ?>" style="width : 100px;" /></td>

        <td><a onclick="return confirm('sure?');" href="del.php?did=<?php echo $row['id']; ?>" class="btn btn-secondary">Delete</a></td>
        <td><a href="edit.php?eid=<?php echo $row['id']; ?>" class="btn btn-info">Update</a></td>
      </tr>


    
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>