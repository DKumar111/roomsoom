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

        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #F9F9F9;
}
.background{
    width: 430px;
    height: 350px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 30%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    /* color: #ffffff; */
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
    color: black;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
    color: black;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    /* background-color: rgba(255,255,255,0.07); */
    border: 1px solid #C8C8C8;
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    /* color: black; */
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ff0000;
    color: white;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

@media screen and (min-width: 320px) and (max-width: 420px) {
    form{
    height: 478px;
    width: 308px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
    margin-bottom: 2rem;
}
}

    </style>
</head>

<body >
    <a style="position: absolute; left: 1rem; top: 1rem;" class="text-decoration-none px-3 py-2 bg-danger border rounded-1  text-white" href="index.php">HOME</a>
  

    <!-- STYLED LOGIN FORM -->
    <div class="background">
        <!-- <div class="shape"></div>
        <div class="shape"></div> -->
    </div>
    <form action="" method="POST">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">

        <button name="login">Log In</button>
        <a style="font-size: 0.7rem;" href="forgot-password.php">Forgot Password</a>
        <div><p style="font-size: 0.7rem;">Don't have an account ? <a href="register.php">Register</a></p></div>
    </form>
    <!-- STYLED LOGIN FORM END HERE -->

    

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
    $user_mobile = $row_data['mobile_number'];
    // $rowData = mysqli_fetch_assoc($rowCount);


    if($rowCount>0){
        $_SESSION['username'] = $user_name;
        $_SESSION['email'] = $useremail;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['mobile_number'] = $user_mobile;
        $_SESSION['login'] = true;
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