<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">User Details</h1>
        <div class="row">
            <div class="col-md-12 text-center">
                <table class="table table-stripped">
                 <thead>
                 <tr>
                        <th>S.no.</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>DOB</th>
                        <th>Created On</th>
                        <th>Action</th>
                    </tr>
                 </thead>  
                <tbody>
                <?php
                    $sno = 0;
                    $sql="select user_id,name,age,dob,created_on from profile_details";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)!=0){
                        while($row=mysqli_fetch_array($result)){
                            
                            $name=$row['name'];
                            $age=$row['age'];
                            $dob=$row['dob'];
                            $time = $row['created_on'];
                            $sno++;
                    ?>
                <tr>                    
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $dob; ?></td>
                        <td><?php echo $time; ?></td>
                        <td>
                            <a href="register_edit.php?user=<?php echo $row['user_id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="delete.php?del=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                         }
                        }
                        ?>
                </tbody>
                </table>
            </div>
    </div>
</body>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
</html>