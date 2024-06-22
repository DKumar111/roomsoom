<?php  include ('phpScript/dbconnect.php') ;  
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password Roomsoom</title>
    <link rel="shortcut icon" href="asset/images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="width: 100%; height: 100vh; background-color:white"
    class="d-flex flex-column  justify-content-center align-items-center">
    <a style="position: absolute; left: 1rem; top: 1rem;" class="text-decoration-none px-3 py-2 bg-danger border rounded-1  text-white" href="index.php">HOME</a>
    <div class="text-black m-5 mt-0 fw-bold fs-5 border-bottom shadow p-2 border-4   ">
        <h3>Reset Password</h3>
    </div>

    <form action="" method="post"
        class=" d-flex justify-content-center align-items-center flex-column w-100 h-50 rounded-4   text-dark"
        style="background: rgba(255, 255, 255, 0.4) ;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">New Password</label>
            <input type="password" class="form-control" required="required" name="password" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" required="required" name="c_password" id="exampleInputPassword1">
        </div>
        <button type="submit" name="reset__password" class="shadow btn btn-danger border-0 px-4 py-2">Reset Password</button>
        <div id="emailHelp" class="form-text fw-semibold ">Don't have an account? <a class="text-black"
                href="register.php">Register</a></div>
        <!-- <div id="emailHelp" class="form-text fw-semibold "><a class="text-black"
                href="forgot-password.php">Forgot Password?</a></div> -->
    </form>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>




<?php

    if(isset($_POST['reset__password']) && isset($_GET['uid'])){
        $uid = $_GET['uid'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        if($password != $c_password){
            echo "<script>alert('Password does not match')</script>";
        }else{
            $updat_pwd = "UPDATE `roomsoom_user` SET `user_password`='$password'  WHERE user_id = '$uid'";
            $result = mysqli_query($conn, $updat_pwd);
            if($result){
                echo "<script>alert('Password Reset Succesfully')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
        }
    }
?>