<?php  include ('phpScript/dbconnect.php') ;  ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Roomsoom</title>
    <link rel="shortcut icon" href="asset/images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            @media (max-width: 767.98px) {
                body{
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                }
                .register_section{
                    width: 100%;
                    height: ;
                }
                .left{
                    display: none;
                }
                .right{
                    width: 100% !important;
                }
                .heading{
                    margin-top: 5rem !important;
                }
            }
        </style>
</head>

<body class="d-flex justify-content-center align-items-center flex-column   " style="width: 100%; height: 100vh;">
<a style="position: absolute; left: 1rem; top: 1rem;" class="text-decoration-none px-3 py-2 bg-danger border rounded-1  text-white" href="index.php">HOME</a>
    <div class="heading mt-0 mb-3 text-bg-danger py-1 px-4 shadow font-monospace  ">
        <h1>Roomsoom</h1>
    </div>

    <div class="register_section shadow d-flex justify-content-center align-items-center px-0 py-0 "
        style="width: 100%; ">
        <div style="width: 60%; height: 100%" class="left border border-1 border-end-0  object-fit-cover  ">
            <img class="bg-white" width="100%" height="100%" src="asset/images/register_img.jpg" alt="">
        </div>
        <div style="width: 40%; height: 100%; "
            class="right d-flex justify-content-center align-items-center flex-column bg-white border border-1 border-start-0  ">
            <div class="register pb-4 ">
                <h3>Register</h3>
            </div>
            <div class="register_form w-100 ">
                <form action="" method="post"
                    class="d-flex justify-content-center align-items-center flex-column  w-100">
                    <div class="mb-3 w-75">
                        <!-- <label for="exampleInputEmail1" class="form-label">Name</label> -->
                        <input type="text" class="form-control w-100  border-0 rounded-0  border-bottom border-2  "
                            placeholder="Name" name="username" autocomplete="off" required="required" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 w-75">
                        <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                        <input type="email" class="form-control w-100 border-0 rounded-0  border-bottom border-2"
                            placeholder="Email" name="email" autocomplete="off" required="required" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 w-75">
                        <!-- <label for="exampleInputEmail1" class="form-label">Mobile Number</label>/ -->
                        <input type="text" class="form-control border-0 rounded-0  border-bottom border-2"
                            placeholder="Phone" name="phone" autocomplete="off" required="required" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 w-75">
                        <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                        <input type="password" class="form-control border-0 rounded-0  border-bottom border-2"
                            placeholder="Password" name="password" required="required" autocomplete="off" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 w-75">
                        <!-- <label for="exampleInputPassword1" class="form-label">Confirm Password</label> -->
                        <input type="password" class="form-control border-0 rounded-0  border-bottom border-2"
                            placeholder="Confirem Password" name="confirm_password" required="required" autocomplete="off" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="register"
                        class="shadow btn btn-danger border-0 px-4 py-2">Register</button>
                    <div id="emailHelp" class="form-text">Already have an account? <a href="login.php">Login</a></div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>


<?php

if(isset($_POST['register'])){
    $user_name = $_POST['username'];
    $user_Email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_Password = $_POST['password'];
    // $hash_password = password_hash($user_Password, PASSWORD_DEFAULT);
    $user_confirm_password = $_POST['confirm_password'];
   


    //check for existing user in user table
    $select_query = "SELECT * FROM `roomsoom_user` WHERE email = '$user_Email' OR mobile_number = '$user_phone'";
    $result = mysqli_query($conn, $select_query);
    $rows_count = mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('User or email already exist')</script>";
    }elseif ($user_Password != $user_confirm_password) {
        echo "<script>alert('Password do not matched')</script>";
    }
    else{
                    //insert query
            $insert_query = "INSERT INTO `roomsoom_user`(`username`, `email`, `mobile_number`, `user_password`) 
            VALUES ('$user_name','$user_Email','$user_phone','$user_Password')";

            $sql_execute = mysqli_query($conn, $insert_query);
            if($sql_execute){
                echo "<script>alert('Data inserted successfully')</script>";
                echo "<script>window.open('login.php', '_self')</script>";
            }else{
                die("Connection failed: " . mysqli_connect_error());
            }
        }
}

?>