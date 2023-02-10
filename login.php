<?php

include'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password =md5($_POST['password']) ;

    $sql = "SELECT * FROM users WHERE email ='$email' AND password ='$password' ";
    $result = mysqli_query($conn, $sql);
    if($result -> num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header('location:index.html');
    } else {
        echo "<script>alert('Ooops! Email or Password is Wronged.')</script>";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Log In</title>
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
            <h3 class="form-heading">Login</h3>
            <form action="" method="POST">
                <label for="email">User Email</label><br>
                <input type="email" name="email" value="<?php echo $email; ?>" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" value="<?php echo $email; ?>"  required><br>
                <div class="login-btn">
                    <button type="submit" name="submit" value="<?php echo $_POST['password']; ?>" class="log-btn">Log In</button>
                </div>
                <p class="login-register-text">Don't have an account ?   <a class="p-link" href="signin.php">Register Here..</a></p>
            </form>
        </div>

        <!-- End of form -->
</body>
</html>