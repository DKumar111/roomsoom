<?php
if(isset($_GET['edit_property'])){
    $edit_id = $_GET['edit_property'];
    $get_data = "SELECT * FROM `properties` WHERE s_id = $edit_id";
    $result = mysqli_query($conn, $get_data);
    $row = mysqli_fetch_assoc($result);
    $property_owner = $row['property_owner'];
    $city = $row['city'];
    $locality = $row['locality'];
    $property_type = $row['property_type'];   
    $address = $row['property_address'];   
    $twin_sharing_price = $row['twin_sharing_price'];   
    $solo_room_price = $row['solo_room_price'];   
}


if(isset($_POST['update'])){
    $property_owner = $_POST['property_owner'];
    $city = $_POST['city'];
    $locality = $_POST['locality'];
    $property_type = $_POST['property_type'];
    $address = $_POST['address'];
    $twin_sharing_price = $_POST['twin_sharing_price'];
    $solo_room_price = $_POST['solo_room_price'];

    //accessing images
$property_image = $_FILES['image']['name'];
$property_image2 = $_FILES['image2']['name'];
$property_image3 = $_FILES['image3']['name'];

//accessing temp name
$temp_property_image = $_FILES['image']['tmp_name'];
$temp_property_image2 = $_FILES['image2']['tmp_name'];
$temp_property_image3 = $_FILES['image3']['tmp_name'];

if($property_owner == '' || $city == '' || $locality == '' || $property_type =='' || $address =='' || $twin_sharing_price == '' ||  $solo_room_price == '' ){
    echo "<script>alert('Please fill all the field')</script>";
    echo "<script>window.open('admin_index.php, '_self')</script>";
    exit();
}else{
    move_uploaded_file($temp_property_image, "../asset/property_image/$property_image");
    move_uploaded_file($temp_property_image2, "../asset/property_image/$property_image2");
    move_uploaded_file($temp_property_image3, "../asset/property_image/$property_image3");


   $update_sql =  "UPDATE `properties` SET `property_owner`='$property_owner',`city`='$city'
   ,`locality`='$locality',`property_type`='$property_type',`property_address`='$address',`twin_sharing_price`='$twin_sharing_price'
   ,`solo_room_price`='$solo_room_price',`property_image`='$property_image',`property_image2`='$property_image2',
   `property_image3`='$property_image3' WHERE s_id = $edit_id ";

    $result_update = mysqli_query($conn, $update_sql);
    if($result_update){
        echo "<script>alert('Product updated successfully!')</script>"; 
        echo "<script>window.open('admin_index.php?show_all','_self')</script>"; 
    }
}
}

?>

<div class="container-fluid d-flex flex-column  justify-content-center align-items-center  w-100 p-2   ">
    <div class="form_heading">
        <h1>UPDATE ROOMSOOM's PROPERTY</h1>
    </div>
    <form method="post" action="" enctype="multipart/form-data" style="border: 1px solid gray; border-radius: 10px; padding: 1rem;"
        class="row g-3 mt-5 needs-validation  justify-content-center align-items-center border-2  w-50 pt-5 "
        novalidate>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Property Owner</label>
            <input type="text" class="form-control" id="validationTooltip01" name="property_owner" value="<?php echo $property_owner?>"
                required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">City</label>
            <input type="text" class="form-control" id="validationTooltip01" name="city" value="<?php echo $city ?>"
                required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Locality</label>
            <input type="text" class="form-control" id="validationTooltip02" name="locality"
                value="<?php echo $locality ?>" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Property Type</label>
            <input type="text" class="form-control" id="validationTooltip02" name="property_type"
                value="<?php echo $property_type ?>" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Property Address</label>
            <input type="text" class="form-control" id="validationTooltip02" name="address"
                value="<?php echo $address ?>" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Twin Sharing Price</label>
            <input type="text" class="form-control" id="validationTooltip02" name="twin_sharing_price"
                value="<?php echo $twin_sharing_price ?>" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Solo Room Price</label>
            <input type="text" class="form-control" id="validationTooltip02" name="solo_room_price"
                value="<?php echo $solo_room_price ?>" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Image</label>
            <input type="file" class="form-control" id="validationTooltip02" name="image" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Image2</label>
            <input type="file" class="form-control" id="validationTooltip02" name="image2" required>
        </div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip02" class="form-label">Image3</label>
            <input type="file" class="form-control" id="validationTooltip02" name="image3" required>
        </div>
        <div class="col-4">
            <button class="btn btn-primary" name="update" type="submit">Update Property</button>
        </div>
    </form>
</div>