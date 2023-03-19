<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="center">
    <form action="" name="reg_form" method="post">
        <img class="image" src="login.jpg" alt="avatar">
        <p>
            <font color="Black" face="Arial Black" size=3>USER Email</font>
        </p>
        <input  class="text-bar" name="user_email" type="email" placeholder="User Email" required>
        <p>
            <font color="Black" face="Arial Black" size=3>Password</font>
        </p>
        <input class="text-bar" name="password" type="password" placeholder="Enter Password" required>

        <input type="checkbox">
        <label>
            <font color="Black" face="Arial Black" size=3>Remember Me</font>
            </p>
        </label>
        <p>
        <button input type="submit" button class="login-button" name="submit">LOGIN</button>
            <link rel="stylesheet" href="style.css">
        <p>
            <font color="Black" face="Arial Black" size=3><a href="forgetpassword.html">forget password?</a></font>
        </p>
        </form>
    </div>
    <?php
    

    if (count($_POST) > 0){
        // $a=false;
        $user_email=$_POST['user_email'];
        $password=$_POST['password'];
        $q="select * from registration where email='$user_email' and password='$password'";
        $result = mysqli_query($con, $q);
        if (mysqli_num_rows($result)){
            // $a=true;
            // echo "Login Success";
            header("Location:  ./home.html");
    }
}
    
    ?>
</body>

</html>