<?php  include ('phpScript/dbconnect.php') ;  
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Roomsoom</title>
    <link rel="shortcut icon" href="asset/images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="width: 100%; height: 100vh; background-color:white"
    class="d-flex flex-column  justify-content-center align-items-center">
    <a style="position: absolute; left: 1rem; top: 1rem;" class="text-decoration-none px-3 py-2 bg-danger border rounded-1  text-white" href="index.php">HOME</a>
    <div class="text-black m-5 mt-0 fw-bold fs-5 border-bottom shadow p-2 border-4   ">
        <h3>Roomsoom Login</h3>
    </div>

    <form action="" method="post"
        class=" d-flex justify-content-center align-items-center flex-column w-100 h-50 rounded-4   text-dark"
        style="background: rgba(255, 255, 255, 0.4) ;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" required="required" name="username" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" required="required" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" name="login" class="shadow btn btn-danger border-0 px-4 py-2">Login</button>
        <div id="emailHelp" class="form-text fw-semibold ">Don't have an account? <a class="text-black"
                href="register.php">Register</a></div>
        <div id="emailHelp" class="form-text fw-semibold "><a class="text-black"
                href="forgot-password.php">Forgot Password?</a></div>
    </form>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>




<?php
if(isset($_POST['login'])){
    $useremail = $_POST['username'];
    $password = $_POST['password'];

    $loginQuery = "SELECT * FROM `roomsoom_user` WHERE email = '$useremail' AND user_password = '$password'";
    $result = mysqli_query($conn, $loginQuery);
    $rowCount = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    $user_id = $row_data['user_id'];
    $user_name = $row_data['username'];
    $user_email = $row_data['email'];
    // $rowData = mysqli_fetch_assoc($rowCount);


    if($rowCount>0){
        $_SESSION['username'] = $user_name;
        $_SESSION['email'] = $useremail;
        $_SESSION['user_id'] = $user_id;
        // echo $_SESSION['user_id'];
        if($rowCount==1){
            echo "<script>alert('Login successful')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }else{
            echo "<script>alert('Invalid password')</script>";
        }
    }else{
        echo "<script>alert('Invalid Credentials')</script>";
    }
}


?>