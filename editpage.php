<?php
include 'database.php';

$ID = $_GET['id'];
$sql = "SELECT * from tblemployee where ipkemployeeid=$ID";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit']))
{
    $username = $_POST['Username'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $mail = $_POST['Mail'];
    $contact = $_POST['Contact'];

    $update = "UPDATE tblemployee set employee_username='$username',employee_firstname='$fname',employee_middlename='$mname',employee_lastname='$lname',employee_address='$address',employee_mail='$mail',employee_contact='$contact' where ipkemployeeid=$ID";

    if(mysqli_query($con, $update)){
        echo "<script>alert('Updated')</script>";
        echo "<script>window.location.href = 'http://localhost/myProjects/CRUD_Personal/Index.php';</script>";
    }
    else{
        echo "<script>alert('Something went wrong')</script>";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 900px;
        }
        .form-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }
        .submit-btn {
            grid-column: span 3;
            text-align: center;
            margin-top: 20px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            width: 30%;
            border-radius: 5px;
        }
        button:hover {
            background: #0056b3;
        }
        #backbtn{
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            width: 5%;
            border-radius: 5px;
            margin-left:800px;
        }
        #h1add {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1 id="h1edit">Edit Employee Information</h1>

<button id="backbtn" onclick="indexroute()">Go Back</button>
<div>&nbsp;</div>
<div class="form-container">
    <form action="editpage.php?id=<?php echo $ID; ?>" method="post">
        <div class="form-grid">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="Username" value="<?php echo($row['employee_username']); ?>" required>
            </div>

            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" value="<?php echo($row['employee_firstname']); ?>" required>
            </div>

            <div class="form-group">
                <label for="mname">Middle Name:</label>
                <input type="text" id="mname" name="mname" value="<?php echo($row['employee_middlename']); ?>" required>
            </div>

            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" value="<?php echo($row['employee_lastname']); ?>" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo($row['employee_address']); ?>" required>
            </div>

            <div class="form-group">
                <label for="mail">Mail:</label>
                <input type="email" id="mail" name="Mail" value="<?php echo($row['employee_mail']); ?>" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="Contact" value="<?php echo($row['employee_contact']); ?>" required>
            </div>

            <input type="hidden" name="id" value="<?php echo (int)$row['ipkemployeeid']; ?>">

            <div class="submit-btn">
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
<script>

function indexroute(){
    window.location.href="Index.php";
}

</script>