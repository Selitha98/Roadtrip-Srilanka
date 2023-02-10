<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if($password == $cpassword){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result -> num_rows > 0) {
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                $email = '';
                $_POST['password'] = '';
                $_POST['cpassword'] = '';
                
                header('location:login.php');

            }else {
                echo "<script>alert('Ooops! Something went wronged.')</script>";
            }

        } else {
            echo "<script>alert('Ooops! Email Already Exits.')</script>";
        }
        
    }else {
        echo "<script>alert('Password Not Matched !')</script>";
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>User Registration</title>
</head>
<body>

    <!-- container -->


        <!-- Section 1 -->
        <div class="navbar">
            <img src="./ColorLogo2.png" alt="Logo" class="Logo">
            <div class="navigation-link">
            <a class="nav-link" href="http://localhost/Roadtripsrilanka/index.html" >Home</a>
                <a class="nav-link" href="http://localhost/Roadtripsrilanka/aboutUs/aboutus.html" >About Us</a>
            </div>
        </div>
        
        <!-- End of Section 1 -->
        <!-- log in form -->

        <div class="login-form">
            <h3 class="form-heading">Register</h3>
            <form action="" method="POST">
                <label for="email">User Email</label><br>
                <input type="email" name="email" value="<?php echo $email; ?>" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required><br>
                <label for="password">Confirm Password</label><br>
                <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>"  required><br>
                <div class="login-btn">
                    <button type="submit" name="submit" class="log-btn">Register</button>
                </div>
                <p class="login-register-text">Already have an account ?   <a class="p-link" href="login.php">Log in Here..</a></p>
            </form>
        </div>

        <!-- End of form -->

    
</body>
</html>