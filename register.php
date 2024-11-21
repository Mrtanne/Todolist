<?php

session_start();


include("db.php");

if ($_SERVER['REQUEST_METHOD'] =="POST")
{
    $firstname =$_POST['fname'];
    $lastname =$_POST['lname'];
    $Gender =$_POST['gender'];
    $tel =$_POST['tel'];
    $address =$_POST['address'];
    $email =$_POST['email'];
    $password =$_POST['pass'];

    if(!empty($email) && !empty($password) && !is_numeric($email))

    {
        $query = "Insert into form(fname, lname, gender, tel,address,email,pass) values('$firstname','$lastname', '$Gender', '$tel', '$address', '$email', '$password')";

        mysqli_query($con,$query);

        echo "<script type='text/javascript'> alert('Registration Successful');</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please enter some valid information');</script>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styleshit.css">
</head>
<body>
<div class="signup">
    <h1>Sign Up</h1>
    <form method="POST">
        <label for="First Name">First Name:</label>
        <input type="text" name="fname" required>
        <label for="Last Name">Last Name:</label>
        <input type="text" name="lname" required>
        <label for="Gender">Gender:</label>
        <input type="text" name="gender" required>
        <label for="Contact">Contact:</label>
        <input type="tel" name="tel" required>
        <label for="Address">Address<Address></Address>:</label>
        <input type="text" name="address" required>
        <label for="Email">Email:</label>
        <input type="Email" name="email" required>
        <label for="Password">Password:</label>
        <input type="Password" name="pass" required>
        <input type="Submit" name="" value="Submit">
        <p>Already have an account?<a href="todo.php">click here</a> to login</p>

    </form>
</div>
</body>
</html>