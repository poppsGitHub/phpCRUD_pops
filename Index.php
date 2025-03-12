<?php
require_once('database.php');
$sql = "SELECT * FROM tblemployee";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <br>
        <button class="btn btn-primary" onclick="upsertroute()">Add</button>
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="display-6 text-center">Employee Data's</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <!-- <td>Sr.No</td>  -->
                                <td>Username</td>
                                <td>First Name</td>
                                <td>Middle Name</td>
                                <td>Last Name</td>
                                <td>Address</td>
                                <td>Mail</td>
                                <td>Contact No.</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <?php

                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                     <!-- <td><?php echo $row['ipkemployeeid'] ?></td>  -->
                                    <td><?php echo $row['employee_username'] ?></td>
                                    <td><?php echo $row['employee_firstname'] ?></td>
                                    <td><?php echo $row['employee_middlename'] ?></td>
                                    <td><?php echo $row['employee_lastname'] ?></td>
                                    <td><?php echo $row['employee_address'] ?></td>
                                    <td><?php echo $row['employee_mail'] ?></td>
                                    <td><?php echo $row['employee_contact'] ?></td>
                                    <td><a href="editpage.php?id=<?php echo $row['ipkemployeeid']; ?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="delete.php?myid=<?php echo $row['ipkemployeeid']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php
                                }
                        ?>
                        </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function upsertroute(){
    window.location.href = 'http://localhost/myProjects/CRUD_Personal/upsert.php';
}
</script>    
</html>
