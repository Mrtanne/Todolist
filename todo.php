<?php

session_start();


include("db.php");

if ($_SERVER['REQUEST_METHOD'] =="POST")
{
    $gmail =$_POST['email'];
    $password =$_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "select * from form where pass ='$password' limit 1";
        $result = mysqli_query($con, $query);

        if($result){
            if ($result && mysqli_num_rows($result) > 0)
            {
                $user_data =mysqli_fetch_assoc($result);
                
                if ($user_data['pass'] == $password)
                {
                    header("location:index.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'> alert('Wrong username or password!');</script>";

    }
    else{
        echo "<script type='text/javascript'> alert('Wrong username or password!');</script>";
    }
}

/*formaction=main.php*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styleshit.css">
<title>Log In</title>
</head>
<body>
    <h1>Sign up</h1>

<div class="login">
<form method="POST">
<label for="email">Email:</label>
<input type="text" id="email" name="email"><br><br>
<LABEL for="passowrd">Password:</LABEL>
<input type="text" id="password" name="pass">
<input type ="Submit" name="" value="Submit">
 </form> 
 
</div>
 <div class="create">
    <h3>Dont have an account?</h3>
    <a href="register.php">click here to create an account</a>
 </div>

</body>
</html>
