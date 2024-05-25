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
        <h3>Roomsoom</h3>
    </div>

    <form action="" method="POST"
        class=" d-flex justify-content-center align-items-center flex-column w-100 h-50 rounded-4   text-dark"
        style="background: rgba(255, 255, 255, 0.4) ;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter your registered email</label>
            <input type="email" class="form-control" required="required" name="email" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <button type="submit" name="reset" class="shadow btn btn-danger border-0 px-4 py-2">Submit</button>
        <div id="emailHelp" class="form-text fw-semibold ">Don't have an account? <a class="text-black"
                href="register.php">Create Account</a></div>
    </form>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
if(isset($_POST['reset'])){
    $reset_email = $_POST['email'];

    $reset_sql = "SELECT * FROM `roomsoom_user` WHERE email = '$reset_email'";
    $result = mysqli_query($conn, $reset_sql);
    $count = mysqli_num_rows($result);
    

    if($count>0){
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['user_id'];
    $user_name = $row['username'];
    $email = $row['email'];

    $subject = "Roomsoom Website - Reset Password";
    $message = "";
    ob_start();
    include("reset_email-template.php");
    $message = ob_get_clean();

    $eol = "\r\n";

    $header = "From: contact@roomsoom.com" .$eol;
    $header = "Reply-To: noreply@roomsoom.com" .$eol;
    $header = "To: <{$email}>" .$eol;
    $header = "MIME-Version: 1.0" .$eol;
    $header = "Content-Type: text/html; charset=iso-8859-1" .$eol;


   $mail =  mail($email, $subject, $message, $header);
    if($mail){
        echo "Roomsoom has sent you an email on your email account";
        $_SESSION['msg']['success'] = "We have sent you an email to reset your password";
    }
    }
}


?>

