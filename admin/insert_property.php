<?php

include '../phpScript/dbconnect.php';

if(isset($_POST['insert'])){
$property_owner = $_POST['property_owner'];
$city = $_POST['city'];
$locality = $_POST['locality'];
$property_type = $_POST['property_type'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$solo_price = $_POST['solo_price'];

//accessing images
$property_image = $_FILES['image']['name'];
$property_image2 = $_FILES['image2']['name'];
$property_image3 = $_FILES['image3']['name'];

//accessing temp name
$temp_property_image = $_FILES['image']['tmp_name'];
$temp_property_image2 = $_FILES['image2']['tmp_name'];
$temp_property_image3 = $_FILES['image3']['tmp_name'];

// checking empty condition

if($property_owner == '' || $city == '' || $locality == '' || $property_type =='' || $gender == '' || $address =='' ||  $solo_price == ''){
    echo "<script>alert('Please fill all the field')</script>";
    echo "<script>window.open('admin_index.php?insert_property', '_self')</script>";
    exit();
}else{
    move_uploaded_file($temp_property_image, "../asset/property_image/$property_image");
    move_uploaded_file($temp_property_image2, "../asset/property_image/$property_image2");
    move_uploaded_file($temp_property_image3, "../asset/property_image/$property_image3");

    //insert qurey
    $insert_property = "INSERT INTO `properties`(`property_owner`, `city`, `locality`, `property_type`,  `gender`, `property_address`, `solo_room_price`, `property_image` , `property_image2`, `property_image3`) 
    VALUES ('$property_owner','$city','$locality','$property_type','$gender','$address','$solo_price','$property_image','$property_image2','$property_image3')";

    $result_query = mysqli_query($conn, $insert_property);
    if($result_query){
        echo "<script>alert('Successfully inserted')</script>";
    }
}
}

?>


<div class="container-fluid d-flex flex-column  justify-content-center align-items-center  w-100 p-2   ">
    <div class="form_heading">
        <h1>INSERT ROOMSOOM's PROPERTY</h1>
    </div>
<form method="post" action="" enctype="multipart/form-data" style="border: 1px solid gray; border-radius: 10px; padding: 1rem;" class="row g-3 mt-5 needs-validation  justify-content-center align-items-center  border-2  w-50 pt-5 " novalidate>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Property Owner</label>
            <input type="text" class="form-control" id="validationTooltip01" name="property_owner" placeholder ="Property Owner" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">City</label>
            <input type="text" class="form-control" id="validationTooltip01" name="city" placeholder ="City" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Locality</label>
            <input type="text" class="form-control" id="validationTooltip02" name="locality" placeholder ="Locality" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Property Type</label>
            <input type="text" class="form-control" id="validationTooltip02" name="property_type" placeholder ="Property Type" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Gender</label>
            <input type="text" class="form-control" id="validationTooltip02" name="gender" placeholder ="Property for gender" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Property Address</label>
            <input type="text" class="form-control" id="validationTooltip02" name="address" placeholder ="address" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Solo Room Price</label>
            <input type="text" class="form-control" id="validationTooltip02" name="solo_price" placeholder ="Solo Room Price" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Property image</label>
            <input type="file" class="form-control" id="validationTooltip02" name="image"  required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Property image2</label>
            <input type="file" class="form-control" id="validationTooltip02" name="image2"  required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Property image3</label>
            <input type="file" class="form-control" id="validationTooltip02" name="image3"  required>
        </div>
        <div class="col-4">
            <button class="btn btn-primary" name="insert" type="submit">Insert Property</button>
        </div>
    </form>
</div>