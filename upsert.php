<?php
include 'database.php';
if(isset($_POST['Submit']))
{
    $username = $_POST['Username'];
    $fname = $_POST['Fname'];
    $mname = $_POST['Mname'];
    $lname = $_POST['Lname'];
    $address = $_POST['address'];
    $mail = $_POST['Mail'];
    $contact = $_POST['Contact'];
    $sql="INSERT into tblemployee(employee_username,employee_firstname,employee_middlename,employee_lastname,employee_mail,employee_contact,employee_address)values('$username','$fname','$mname','$lname','$mail','$contact','$address')";
    if(mysqli_query($con,$sql)){
        echo "<script>alert('Added')</script>";
        echo "<script>window.location.href = 'http://localhost/myProjects/CRUD_Personal/Index.php';</script>";
    }
    else{
        echo "<script>alert('something went wrong')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Page</title>
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
        #h1add {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .container {
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
        input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            width: 30%;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
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

    </style>
</head>
<body>

<h1 id="h1add">Add Employee</h1>  
<button id="backbtn" onclick="indexroute()">Go Back</button>
<div>&nbsp;</div>
<div class="container">
    <form method="post">
        <div class="form-grid">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="Username" required>
            </div>

            <div class="form-group">
                <label for="Fname">First Name:</label>
                <input type="text" id="Fname" name="Fname" required>
            </div>

            <div class="form-group">
                <label for="Mname">Middle Name:</label>
                <input type="text" id="Mname" name="Mname" required>
            </div>

            <div class="form-group">
                <label for="Lname">Last Name:</label>
                <input type="text" id="Lname" name="Lname" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="mail">Mail:</label>
                <input type="email" id="mail" name="Mail" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="Contact" required>
            </div>

            <div class="submit-btn">
                <input type="submit" name="Submit" value="Submit">
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
