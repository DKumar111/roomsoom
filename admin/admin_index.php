<?php  
include '../phpScript/dbconnect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roomsoom Admin Panel</title>
    <link rel="shortcut icon" href="../asset/images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<div class="admin_header d-flex justify-content-center p-4 bg-info   ">
    <nav class="">
        <a class="text-decoration-none text-white fs-5 fw-bold  m-3" href="admin_index.php?show_all">SHOW ALL PROPERTY</a>
        <a class="text-decoration-none text-white fs-5 fw-bold  m-3" href="admin_index.php?insert_property">INSERT PROPERTY</a>
        <!-- <a class="text-decoration-none text-white fs-5 fw-bold  m-3" href="admin_index.php?">EDIT PROPERTY</a> -->
        <!-- <a class="text-decoration-none m-3" href="admin_index.php?delete_property">DELETE PROPERTY</a> -->
    </nav>
</div>


<div class="admin_main_section mt-5 ">
    <div class="main_content">
        <?php

            if(isset($_GET['show_all'])){
                include 'show_all.php';
            }
            if(isset($_GET['insert_property'])){
                include 'insert_property.php';
            }
            if(isset($_GET['edit_property'])){
                include 'edit_property.php';
            }
            if(isset($_GET['delete_property'])){
                include 'delete_property.php';
            }

        ?>
    </div>
</div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>