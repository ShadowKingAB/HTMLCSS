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
    <div>
        <form action="index.php" name="reg_form" method="post">
            <div class="center">
                <img class="image" src="login.jpg" alt="avatar">
                <br>
                <div>
                    <label>
                        <font color="Black" face="Arial Black" size=3><u>USER NAME</u></font>
                    </label>
                    <input id="name" class="text-bar" type="text" placeholder=" User Name" name="name" pattern="^[a-z0-9_-]{3,15}$" required>
                </div>
                <br>
                <div>
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <label>
                        <font color="Black" face="Arial Black" size=3><u>USER EMAIL</u></font>
                    </label>
                    <input id="email" class="text-bar" type="email" placeholder="User Email" name="email" required>
                </div>
                <br>
                <div>
                    <font color="Black" face="Arial Black" size=3><u>GENDER</u></font>
                    <br>
                    <font color="Black" face="Arial Black" size=2>
                        <input id="male" type="radio" name="gender" value="m" required> Male
                        <input id="female" type="radio" name="gender" value="f"> Female
                        <input id="others" type="radio" name="gender" value="o"> Others
                    </font>
                </div>
                <br>
                <div>
                    <span class="icon"><ion-icon name="call"></ion-icon></ion-icon></ion-icon></span>
                    <label>
                        <font color="Black" face="Arial Black" size=3><u>PHONE NUMBER</u></font>
                    </label>
                    <input id="phone_number" class="text-bar" type="tel" placeholder="PHONE NUMBER" pattern="[0-9]{10}"
                        name="phone_number" required>
                </div>
                <br>
                <div>
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></ion-icon></span>
                    <label>
                        <font color="Black" face="Arial Black" size=3><u>Password</u></font>
                    </label>
                    <input id="Password" class="text-bar" type="password" placeholder="Enter Password" name="password"
                        required>
                </div>
                <!-- <div>
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></ion-icon></span>
                    <label>
                        <font color="Black" face="Arial Black" size=3><u>Re-Enter Password</u></font>
                    </label>
                    <input id="Password" class="text-bar" type="password" placeholder="Enter Password" required>
                </div> -->
                <br>
                <div>
                    <button input type="submit" button class="login-button" name="submit">Registration</button>
                    <link rel="stylesheet" href="style.css">
                </div>
                <div>
                    <font color="Black" face="Arial Black" size=3><a href="login.php">have an account?</a></font>
                </div>
            </div>
        </form>
    </div>
    <?php
    
   
    if(isset($_POST['submit'])){

        $name=(($_POST['name']));
        
        $email=(($_POST['email']));

        $gender=(($_POST['gender']));
        
        $phone_number=(($_POST['phone_number']));
        
        $password=(($_POST['password']));
        
        if ($name=='' || $email=='' || $gender=='' || $phone_number==''|| $password==''){
        
        $error= "Please enter the details!";
        
        //valid($name, $email, $gender, $phone_number, $password, $error);
        }
        
        else{
        
        $qry = "insert into registration(name, email, gender, phone_number, password) values('$name', '$email','$gender','$phone_number','$password')";
                    $result = mysqli_query($con, $qry);
         echo "<script>alert ('Registration Successful!  Please login to continue');</script>";

       // header("location:index.php");
        }
        }

    ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>